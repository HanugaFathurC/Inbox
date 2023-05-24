<?php

namespace App\Http\Controllers\Landing;

use App\Models\Cart;
use App\Models\Product;
use App\Enums\OrderStatus;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')
            ->latest()
            ->whereBelongsTo(Auth::user())->get();

        $grandQuantity = $carts->sum('quantity');
        $grandPrice = $carts->sum('tagihan');

        return view('landing.cart.index', compact('carts', 'grandQuantity', 'grandPrice'));
    }


    public function store(Request $request, Product $product)
    {
        $alreadyInCart = Cart::with('product')
            ->whereBelongsTo($request->user())
            ->where('product_id', $product->id)
            ->first();

        if($alreadyInCart){
            return back()->with('toast_error', 'Produk sudah ada didalam keranjang');
        }else{
            $request->user()->carts()->create([
                'product_id' => $product->id,
                'quantity' => '1',
                'durasi' => '1',
            ]);
            $amount = $product->harga * 1 * 1 ;
            $request->user()->carts()->update([
                'tagihan' => $amount,
            ]);
            return redirect(route('cart.index'))
                ->with('toast_success', 'Produk berhasil ditambahkan keranjang');
        }
    }

    public function update(Request $request, Cart $cart)
    {
        $product = Product::whereId($cart->product_id)->first();

        if($product->quantity < $request->quantity){
            return back()->with('toast_error', 'Stok produk tidak mencukupi');
        }elseif($request->quantity <= 0 OR $request->durasi <= 0){
            return back()->with('toast_error', 'Mohon masukan data yg valid');
        }else{
            $cart->update([
                'quantity' => $request->quantity,
                'durasi' => $request->durasi,
            ]);
            $amount = $cart->quantity * $cart->durasi * $product->harga;
            $cart->update([
                'tagihan' => $amount,
            ]);
            return back()->with('toast_success', 'Keranjang berhasil diperbaharui');
        }
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return back()->with('toast_success', 'Produk berhasil dikeluarkan dari keranjang');
    }


}
