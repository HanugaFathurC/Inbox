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


    // public function calculate(Request $request)
    // {
    //     // Mendapatkan data kriteria dari database
    //     $criterias = Criteria::all(['name', 'weight', 'attribute']);

    //     // Mendapatkan data order dari database
    //     $orders = Order::all(['id', 'name', 'quantity', 'duration', 'price']);

    //     // Normalisasi data order berdasarkan kriteria
    //     $normalizedOrders = $this->normalizeOrders($orders, $criterias);

    //     // Perangkingan data order berdasarkan nilai total_score
    //     $rankedOrders = $this->rankOrders($normalizedOrders);

    //     // Simpan hasil analisis secara umum di tabel AnalyticLog
    //     $analyticLog = new AnalyticLog();
    //     $analyticLog->name = uniqid();
    //     $analyticLog->save();

    //     $analyticDetails = [];

    //     // Simpan detail perangkingan ke dalam tabel AnalyticDetail
    //     foreach ($rankedOrders as $rank => $order) {
    //         $analyticDetail = new AnalyticDetail();
    //         $analyticDetail->analytic_log_id = $analyticLog->id;
    //         $analyticDetail->order_id = $order['id'];
    //         $analyticDetail->rank = $rank + 1;
    //         $analyticDetail->total_score = $order['total_score'];
    //         $analyticDetail->save();

    //         $analyticDetails[] = $analyticDetail;
    //     }

    //     return view('backoffice.calculate.index', compact('analyticDetails'));
    //     // return redirect()->route('calculate.result', $analyticLog->id);
    // }

    // private function normalizeOrders($orders, $criterias)
    // {
    //     $normalizedOrders = [];

    //     foreach ($orders as $order) {
    //         $normalizedOrder = [
    //             'id' => $order->id,
    //             'name' => $order->name,
    //             'total_score' => 0,
    //             'criteria_values' => []
    //         ];

    //         foreach ($criterias as $criteria) {
    //             $attribute = $criteria->attribute;
    //             $weight = $criteria->weight;

    //             $attributeValue = $order->{$attribute};
    //             $normalizedValue = $this->normalizeValue($attributeValue, $criteria);
    //             $normalizedOrder['total_score'] += $weight * $normalizedValue;
    //             $normalizedOrder['criteria_values'][$attribute] = $normalizedValue;
    //         }

    //         $normalizedOrders[] = $normalizedOrder;
    //     }

    //     return $normalizedOrders;
    // }

    // private function normalizeValue($value, $criteria)
    // {
    //     // $minValue = Order::min($criteria->attribute);
    //     // $maxValue = Order::max($criteria->attribute);

    //     // // Normalisasi menggunakan rumus Min-Max
    //     // $normalizedValue = ($value - $minValue) / ($maxValue - $minValue);

    //     // return $normalizedValue;

    //     $attribute = $criteria->attribute;
    //     $attributeType = $criteria->attribute_type;
    //     $minValue = Order::min($attribute);
    //     $maxValue = Order::max($attribute);

    //     // Normalisasi menggunakan rumus Min-Max
    //     if ($attributeType === 'Benefit') {
    //         $normalizedValue = ($value - $minValue) / ($maxValue - $minValue);
    //     } elseif ($attributeType === 'Cost') {
    //         $normalizedValue = ($maxValue - $value) / ($maxValue - $minValue);
    //     } else {
    //         // Tambahkan logika khusus jika ada jenis atribut lainnya
    //         $normalizedValue = $value;
    //     }

    //     return $normalizedValue;
    // }


    // private function rankOrders($normalizedOrders)
    // {
    //     // Menyusun ulang array order berdasarkan nilai total_score
    //     usort($normalizedOrders, function ($a, $b) {
    //         return $b['total_score'] <=> $a['total_score'];
    //     });

    //     return $normalizedOrders;
    // }


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
