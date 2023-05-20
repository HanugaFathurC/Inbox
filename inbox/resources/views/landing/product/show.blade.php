@extends('layouts.landing.master', ['title' => 'Inbox'])

@section('content')
    <!-- component -->
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="{{ $product->name }}"
                    class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="{{ $product->image }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">Gudang {{ $product->warehouse->name }}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                    <h3 class="text-sm title-font text-gray-500 tracking-widest">Kategori:
                        {{ $product->category->name }}</h3>
                    <p class="leading-relaxed"> <strong>Deskripsi Produk</strong> <br>
                        {{ $product->description }}
                    </p>
                    <span class="title-font font-medium text-2xl text-gray-900">Rp
                        {{ number_format($product->harga, 2, ',', '.') }}</span>
                    <p class="font-light">Tersimpan di Gudang {{ $product->warehouse->type->name }}</p>
                    <p>Alamat {{ $product->warehouse->address }}, {{ $product->warehouse->village->name }},
                        {{ $product->warehouse->district->name }}, {{ $product->warehouse->city->name }},
                        {{ $product->warehouse->province->name }}
                    </p>
                    @if ($product->quantity > 0)
                        <p class="mb-3 font-bold text-orange-600">Stok tersedia: {{ $product->quantity }}</p>
                        <div class="flex justify-between  items-center">
                            <form action="{{ route('cart.store', $product->id) }}" method="POST">
                                @csrf
                                <button
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                                    type="submit">
                                    <img src="{{ asset('resources/Image/add-shopping-cart.svg') }}" alt="icon-add-chart">
                                    Pilih Produk
                                </button>
                            </form>
                        </div>
                    @else
                        <p class="mb-3 font-semibold text-gray-700 ">Stok tidak tersedia</p>
                        <div class="flex justify-between  items-center">
                            <a href="#" style="pointer-events: none"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300">
                                <img src="{{ asset('resources/Image/add-shopping-cart.svg') }}" alt="icon-add-chart">
                                Pilih Produk
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
