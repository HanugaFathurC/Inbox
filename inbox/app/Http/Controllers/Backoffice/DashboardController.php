<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use App\Models\Warehouse;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\AnalyticLog;
use App\Models\AnalyticDetail;
use App\Enums\OrderStatus;
use App\Enums\TransactionStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if(Auth::user()->hasRole('admin')){


            $categories = Category::count();

            $types = Type::count();

            $warehouses = Warehouse::count();

            $products = Product::count();

            $users = User::count();

            $transactions = TransactionDetail::sum('quantity');

            $transactionThisMonth = TransactionDetail::whereMonth('created_at', date('m'))->sum('quantity');

            $productsOutStock = Product::where('quantity', '<=', 10)->paginate(5);

            $orders = Order::where('status', OrderStatus::Pending)
                ->whereNull('deleted_at')
                ->get();

            $analyticLogs = AnalyticLog::latest()->take(1)->get();

            $recommendationProducts = [];

            $recommendationCreated = "" ;

            foreach ($analyticLogs as $analyticLog) {
                $analyticDetails = AnalyticDetail::where('analytic_log_id', $analyticLog->id)
                    ->orderBy('final_score', 'desc')
                    ->take(3)
                    ->get();

                $recommendationCreated  = Carbon::parse($analyticLog->created_at)->timezone('Asia/Jakarta');

                foreach ($analyticDetails as $analyticDetail) {
                    $recommendationProducts[] = [
                        'order' => $analyticDetail->order,
                        'saw_score' => $analyticDetail->total_score,
                        'created_at' => $analyticDetail->created_at,
                        'rank' => $analyticDetail->rank
                    ];
                }
            }

            $incomeByType = DB::table('transaction_details')
                            ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
                            ->join('products', 'transaction_details.product_id', '=', 'products.id')
                            ->join('warehouses', 'products.warehouse_id', '=', 'warehouses.id')
                            ->join('types', 'warehouses.type_id', '=', 'types.id')
                            ->select(
                                DB::raw('DATE_FORMAT(transaction_details.created_at, "%b %Y") as month_year'),
                                'types.name AS warehouseType',
                                DB::raw('SUM(transactions.grand_total) AS total_income')
                            )
                            ->where('transactions.payment_status', 'paid')
                            ->groupBy('month_year', 'warehouseType')
                            ->orderByRaw('MIN(transaction_details.created_at)')
                            ->get();

            $warehouseIncome = DB::table('transaction_details')
                            ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
                            ->join('products', 'transaction_details.product_id', '=', 'products.id')
                            ->join('warehouses', 'products.warehouse_id', '=', 'warehouses.id')
                            ->select(
                                DB::raw('DATE_FORMAT(transaction_details.created_at, "%b %Y") as month_year'),
                                'warehouses.name as warehouse',
                                DB::raw('SUM(transactions.grand_total) as income')
                            )
                            ->where('transactions.payment_status', 'paid')
                            ->groupBy('month_year', 'warehouse')
                            ->orderByRaw('MIN(transaction_details.created_at)')
                            ->get();

            $allTimeIncome  = DB::table('transaction_details')
                            ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
                            ->select(
                                DB::raw('DATE_FORMAT(transaction_details.created_at, "%b %Y") as month_year'),
                                DB::raw('SUM(transactions.grand_total) as income')
                            )
                            ->where('transactions.payment_status', 'paid')
                            ->groupBy('month_year')
                            ->orderByRaw('MIN(transaction_details.created_at)')
                            ->get();


            $bestProduct = DB::table('transaction_details')
                            ->addSelect(DB::raw('products.name as name, sum(transaction_details.quantity) as total'))
                            ->join('products', 'products.id', 'transaction_details.product_id')
                            ->groupBy('transaction_details.product_id')
                            ->orderBy('total', 'DESC')
                            ->limit(3)->get();

            $poorProduct =  DB::table('transaction_details')
                            ->addSelect(DB::raw('products.name as name, sum(transaction_details.quantity) as total'))
                            ->join('products', 'products.id', 'transaction_details.product_id')
                            ->groupBy('transaction_details.product_id')
                            ->orderBy('total', 'ASC')
                            ->limit(3)->get();

            $warehouseIncomeByWarehouse = [];


            $warehouseByType = [];

            $allTimeIncome_incomeData = [];

            $labelBest = [];

            $totalBest = [];

            $labelPoor = [];

            $totalPoor = [];


            if(count($bestProduct)){
                foreach($bestProduct as $data){
                    $labelBest[] = $data->name;
                    $totalBest[] = (int) $data->total;
                }
            }else{
                $labelBest[] = '';
                $totalBest[] = '';
            }


            if(count($poorProduct)){
                foreach($poorProduct as $data){
                    $labelPoor[] = $data->name;
                    $totalPoor[] = (int) $data->total;
                }
            }else{
                $labelPoor[] = '';
                $totalPoor[] = '';
            }

            foreach ($allTimeIncome as $data) {
                $allTimeIncome_incomeData[$data->month_year] = $data->income;
            }

            // foreach ($warehouseIncome as $data) {
            //         $month = $data->month;
            //         $name = $data->warehouse;
            //         $totalIncome = $data->income;
            //     if (!isset($warehouseIncomeByWarehouse[$month])) {
            //         $warehouseIncomeByWarehouse[$month] = [];
            //     }

            //     $warehouseIncomeByWarehouse[$month][$name] = $totalIncome;

            // }


            // foreach ($incomebyType as $data) {
            //     $month = $data->month;
            //     $type_id = $data->warehouseType;
            //     $totalIncome = $data->total_income;

            //     if (!isset($warehouseByType[$month])) {
            //         $warehouseByType[$month] = [];
            //     }

            //     $warehouseByType[$month][$type_id] = $totalIncome;
            // }

            return view('backoffice.dashboard', compact('categories', 'types', 'warehouses', 'products', 'users', 'transactions', 'transactionThisMonth', 'productsOutStock', 'orders', 'incomeByType','warehouseIncome','allTimeIncome_incomeData', 'labelBest', 'totalBest', 'labelPoor', 'totalPoor', 'recommendationProducts', 'recommendationCreated' ));

        } else {

            $orders = Order::where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->get();

            $transactions = Transaction::with('details')
                ->where('user_id', Auth::id())
                ->get();

            return view('backoffice.dashboard', compact('orders', 'transactions'));

        }
    }
}
