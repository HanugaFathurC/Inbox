@extends('layouts.landing.master', ['title' => 'Inbox'])

@section('content')
    @include('layouts.landing.partials.hero')
    <section class="container my-4 mx-auto px-6 ">
        <x-landing.search-header title="Daftar Produk" url="" />
        <div class="mt-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @if (count($products) == null)
                <p class="my-3 font-semibold text-gray-700 text-center col-start-1 col-end-7 ">Produk tidak tersedia</p>
            @else
                @foreach ($products as $product)
                    <x-landing.product-item :product=$product />
                @endforeach
            @endif

        </div>
        <div class="flex justify-end mt-3">
            {{ $products->links('pagination::tailwind') }}</div>
    </section>
@endsection