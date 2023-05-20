<?php

namespace App\Http\Controllers\Landing;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Warehouse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans;

class TransactionController extends Controller
{
    public function __construct()
    {
        Midtrans\Config::$serverKey = env('MIDTRANS_SERVERKEY');
        Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
        Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');
    }

    public function __invoke(){
        $length = 8;
        $random = '';

        for($i = 0; $i < $length; $i++){
            $random .= rand(0,1) ? rand(0,9) : chr(rand(ord('a'), ord('z')));
        }

        $invoice = 'INV-'.Str::upper($random);

        $transaction = Transaction::create([
            'invoice' => $invoice,
            'user_id' => Auth::id(),
        ]);

        $carts = Cart::where('user_id', Auth::id())->get();

        foreach($carts as $cart){
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'durasi' => $cart->durasi,
                'tagihan' => $cart->tagihan,
            ]);
            $product = Product::whereId($cart->product_id)->decrement('quantity', $cart->quantity);
            Warehouse::whereId($product->warehouse_id)->decrement('storage', $product->quantity);
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect(route('transaction-success'))->with('toast_success', 'Terimakasih pesanan Anda diterima');
    }
}
