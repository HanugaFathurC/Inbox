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
use App\Enums\OrderStatus;
use App\Enums\TransactionStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

            $orders = Order::where('status', OrderStatus::Pending)->get();

            $bestProduct = DB::table('transaction_details')
                            ->addSelect(DB::raw('products.name as name, sum(transaction_details.quantity) as total'))
                            ->join('products', 'products.id', 'transaction_details.product_id')
                            ->groupBy('transaction_details.product_id')
                            ->orderBy('total', 'DESC')
                            ->limit(5)->get();

            $poorProduct =  DB::table('transaction_details')
                            ->addSelect(DB::raw('products.name as name, sum(transaction_details.quantity) as total'))
                            ->join('products', 'products.id', 'transaction_details.product_id')
                            ->groupBy('transaction_details.product_id')
                            ->orderBy('total', 'ASC')
                            ->limit(5)->get();


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
                foreach($pporProduct as $data){
                    $labelPoor[] = $data->name;
                    $totalPoor[] = (int) $data->total;
                }
            }else{
                $labelPoor[] = '';
                $totalPoor[] = '';
            }

            return view('backoffice.dashboard', compact('categories', 'types', 'warehouses', 'products', 'users', 'transactions', 'transactionThisMonth', 'productsOutStock', 'orders', 'labelBest', 'totalBest', 'labelPoor', 'totalPoor' ));

        } else {

            $orders = Order::where('user_id', $request->user())->get();

            $transactions = DB::table('transactions')
                    ->join('transaction_details', 'transaction_id', '=', 'transactions.id')
                    ->where('transactions.user_id', $request->user())
                    ->get();

            return view('backoffice.dashboard', compact('orders', 'transactions'));

        }
    }
}
