@props(['carts', 'grandPrice'])
<form action="{{ route('transaction.store') }}" method="POST">
    @csrf
    <div class="border rounded-lg overflow-hidden">
        <div class="bg-white px-4 py-3 flex items-center">
             <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice mr-1" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                </path>
                <line x1="9" y1="7" x2="10" y2="7"></line>
                <line x1="9" y1="13" x2="15" y2="13"></line>
                <line x1="13" y1="17" x2="15" y2="17"></line>
            </svg>  -->
            <p class="text-black text-2xl font-extrabold ml-1">Konfirmasi Pesanan</p>
        </div>
        <div class="p-4 bg-white">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-y-2">
                    <!-- <label class="text-base text-gray-700">
                        Nama Lengkap
                    </label> -->
                    <input type="text" class="rounded-md border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed" value="Nama Lengkap" name="name" readonly />
                    <!-- <input type="text"
                        class="rounded-md border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed"
                        value="{{ Auth::user()->name }}" name="name" readonly /> -->

                </div>
                <div class="flex flex-col gap-y-2">
                    <!-- <label class="text-base text-gray-700">
                        Email
                    </label> -->
                    <input type="email" class="rounded-lg border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed" value="email" name="email" readonly />
                    <!-- <input type="email"
                        class="rounded-lg border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed"
                        value="{{ Auth::user()->email }}" name="email" readonly /> -->
                </div>
                <h2 class="pt-2 font-extrabold ml-1">Rekap Order</h2>
                @forelse ($carts as $i=>$cart)
                <div class="flex flex-col ml-1 gap-y-3 justify-between">
                    <label class="text-lg font-semibold">
                        {{ $cart->product->name }}
                    </label>
                    <div class="flex justify-between mr-80">
                        <label class="text-gray-600 "> Harga: </label>
                        <label> {{ $cart->product->price }} </label>
                    </div>
                    <div class="flex justify-between mr-80">
                        <label class="text-gray-600 w-12 justify-between"> Banyak:  </label>
                        <label> {{ $cart->quantity }} </label>
                    </div>
                    <div class="flex justify-between mr-80">
                        <label class="text-gray-600 w-12 justify-between"> Durasi: </label>
                        <label> {{ $cart->durasi }} </label>
                    </div>
                    <div class="flex">
                        <label class="text-gray-600"> Biaya: </label>
                        <label class="text-blue-700 font-extrabold ml-16"> Rp {{ number_format($cart->tagihan, 3, '.') }} </label>
                    </div>
                </div>
                <hr>

                @empty
                <label class="text-base text-gray-700">
                    Belum ada produk di keranjang
                </label>
                @endforelse

                <div class="flex gap-60">
                    <label class="text-base text-gray-700">
                        Total Tagihan
                    </label>
                    <p class=" text-blue-700 font-extrabold ">
                        Rp {{ number_format($grandPrice, 3, '.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3">
        <button class="text-black bg-blue-300 rounded-lg w-full p-2" type="submit">
            Order Sekarang
        </button>
    </div>
</form>