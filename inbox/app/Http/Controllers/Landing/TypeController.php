<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::latest()
            ->search('name')
            ->get();

        return view('landing.type.index', compact('types'));
    }
    public function show(Type $type)
    {
        $products = Product::join('warehouses', 'warehouses.id', 'products.warehouse_id')
            ->join('types', 'types.id', 'warehouses.type_id')
            ->where('warehouses.type_id', $type->id)
            ->latest()
            ->paginate(6)
            ->search('name')
            ->withQueryString()();

        return view('landing.type.show', compact('products', 'type'));
    }
}
