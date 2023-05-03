<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductStockController extends Controller
{
    public function index()
    {
        $products = Product::with(['warehouse', 'category'])
            ->search('name')
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('backoffice.product-stock.index', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'quantity' => $request->quantity,
        ]);

        return back()->with('toast_success', 'Stok berhasil disimpan');
    }
}
