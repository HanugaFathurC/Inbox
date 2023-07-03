<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Order;
use App\Models\AnalyticLog;
use App\Models\AnalyticDetail;
use App\Enums\OrderStatus;

class CalculateController extends Controller
{
    public function index()
    {
        $analyticDetails = [];

        return view('backoffice.calculate.index', compact('analyticDetails'));
    }

    public function calculate(Request $request)
    {
        $criterias = Criteria::all(['name', 'weight', 'attribute']);
        $orders = Order::where('status', OrderStatus::Pending)
        ->whereNull('deleted_at')
        ->get(['id', 'name', 'quantity', 'duration', 'price']);

         // Normalisasi nilai pada setiap order berdasarkan kriteria
         $normalizedOrders = [];
         foreach ($orders as $order) {
             $normalizedValues = [];

             foreach ($criterias as $criteria) {
                 $attribute = strtolower($criteria->name);
                 $weight =  $criteria->weight;
                 $value = $order->$attribute;

                 // Normalisasi nilai
                 $normalizedValue = $this->normalizeValue($value, $criteria);

                 $normalizedValues[$attribute] = $normalizedValue;
             }

             $normalizedOrder = [
                 'order_id' => $order->id,
                 'normalized_values' => $normalizedValues,
             ];

             $normalizedOrders[] = $normalizedOrder;
         }

         // Simpan hasil analisis secara umum ke dalam AnalyticLog
         $analyticLog = new AnalyticLog();
         $analyticLog->name = uniqid();
         $analyticLog->save();

         // Simpan detail per order ke dalam AnalyticDetail
         foreach ($normalizedOrders as $normalizedOrder) {
             $order = Order::find($normalizedOrder['order_id']);
             $totalScore = $this->calculateTotalScore($normalizedOrder['normalized_values'], $criterias);

             $analyticDetail = new AnalyticDetail();
             $analyticDetail->analytic_log_id = $analyticLog->id;
             $analyticDetail->order_id = $order->id;
             $analyticDetail->final_score = $totalScore;
             $analyticDetail->save();
         }

         // Lakukan pengurutan berdasarkan nilai total skor (final score) secara descending
         $analyticDetails = AnalyticDetail::where('analytic_log_id', $analyticLog->id)
             ->orderBy('final_score', 'desc')
             ->get();

         // Tambahkan peringkat ke dalam AnalyticDetail
         $rank = 1;
         foreach ($analyticDetails as $analyticDetail) {
             $analyticDetail->rank = $rank;
             $analyticDetail->save();

             $rank++;
         }

        //  return view('calculate.result', compact('analyticLog'));
         return view('backoffice.calculate.index', compact('analyticDetails'));

    }



     private function normalizeValue($value, $criteria)
     {
         $attributeType = $criteria->attribute;

         $minValue = Order::min(strtolower($criteria->name));
         $maxValue = Order::max(strtolower($criteria->name));

         if ($attributeType === 'Benefit') {
             $normalizedValue = $value / $maxValue;
         } elseif ($attributeType === 'Cost') {
             $normalizedValue = $minValue / $value;
         } else {
             $normalizedValue = $value;
         }

         return $normalizedValue;
     }

     private function calculateTotalScore($normalizedValues, $criteria)
     {
         $totalScore = 0;

         foreach ($criteria as $criteria) {
             $attribute = strtolower($criteria->name);
             $weight = $criteria->weight;

             $normalizedValue = $normalizedValues[$attribute];

             $totalScore += $normalizedValue * $weight;
         }

         return $totalScore;
     }



}
