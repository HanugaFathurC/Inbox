@props(['carts', 'grandQuantity'])

@forelse ($carts as $i=>$cart)
<div class="flex flex-col md:flex-row items-start">
        <div class="flex items-center mb-6 pt-12 ">
            <div class="ml-14">
            <a href="#" class="text-red-600 " onclick="deleteData({{ $cart->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-minus"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line x1="9" y1="12" x2="15" y2="12"></line>
                            </svg>
                        </a>
            </div>
            <div class="w-40 h-40 ml-8">
            <img class="w-full h-full object-cover" src="{{ $cart->product->image }}" alt="{{ $cart->product->name }}">
            </div>
            <div class="ml-16">
                <p class="text-xl font-bold mb-2">{{ $cart->product->name }}</p>
                <p class="text-blue-600 text-lg font-bold mb-4"> Rp{{ number_format($cart->product->price, 3, '.') }}</p>
                <div class="flex items-center">
                    <div class="flex">
                        <div class="flex">
                            <label for="quantity" class=" flex-col text- font-bold mr-4 mt-1">Jumlah:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" class="border border-gray-300 rounded-lg py-2 px-4 text-sm w-16  ">
                        </div>
                        <div class="flex ml-12">
                            <label for="quantity" class=" flex-col text-md font-bold mr-4 mt-1 ">Sewa/Bulan:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" class="border border-gray-300 rounded-lg py-2 px-4 text-sm w-16  ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@empty
<table class="w-full text-sm text-left text-gray-500  divide-y divide-gray-200 ">
    <tbody class="divide-y divide-gray-200 bg-white">
        <tr>
            <td class="px-6 py-4" colspan="6">
                <div class="flex items-center justify-center h-96">
                    <div class="text-center flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-basket" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="7 10 12 4 17 10"></polyline>
                            <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                            <circle cx="12" cy="15" r="2"></circle>
                        </svg>
                        <div class="mt-5">
                            Keranjang Anda Kosong
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforelse
        <!-- <tr>
            <td class="py-3 px-20 ml-24 whitespace-nowrap text-green-400">Total item</td>
            {{ $grandQuantity }} Item
            </td>
        </tr> -->
    </tbody>
</table>