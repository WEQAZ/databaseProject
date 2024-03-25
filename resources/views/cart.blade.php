<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Cart') }}
        </h2>
    </x-slot>
    <div class="bg-white py-16 px-6 sm:px-8">
        <div class="max-w-7xl mx-auto border border-gray-300 rounded-lg shadow-md">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900">Your Shopping Cart</h2>

                <ul role="list" class="my-6 grid grid-cols-1 md:grid-cols--2 gap-4">
                    @php
                        $totalprice = 0;
                    @endphp
                    @foreach ($cart as $items)
                        <li class="flex py-0 ">
                            <div
                                class="h-24 w-24 md:h-32 md:w-32 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                <img src="{{ $items['pic'] }}" alt="">
                            </div>
                            <div class="flex flex-col ml-4 md:ml-6">
                                <div class="text-base font-medium text-gray-900">
                                    <div class="flex items-center justify-between">
                                        <h3 class="flex space-x-[760px]  text-lg font-semibold text-slate-900">
                                            <div>{{ $items->product_name }}</div>
                                            {{-- 
                                            <a href="{{ url('delete_cart', $items->id) }} method="POST"
                                                onclick="return confirm('Are you sure to delete {{ $items->product_name }} ?')"class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-3 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 absolute">

                                                <img src="upload/images/bin-2.png" alt=""
                                                    style="width: 20px; height: 20px;">
                                            </a> --}}
                                            <form action="{{ url('/delete_cart', $items->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>

                                        </h3>

                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">{{ $items->description }} </p>
                                    <p class="mt-1 text-sm text-gray-500">qty: {{ $items->quantity }}</p>
                                    <div class="flex flex-1 items-end justify-between text-sm mt-2">
                                        <p class="text-gray-500">{{ $items->price }} /piece</p>

                                    </div>
                                    <div class="mt-1">Total: {{ $items->price * $items->quantity }}</div>
                                </div>
                            </div>
                        </li>
                        @php
                            $totalprice += $items['price'] * $items->quantity;
                        @endphp
                    @endforeach
                </ul>

                <div class="flex flex-col border-t border-gray-200 py-6 px-10 sm:px-4">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                        <p>Subtotal</p>
                        <p>${{ $totalprice }}</p>
                    </div>
                    <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>


                    {{-- Address Form --}}
                    <form action="{{ url('post_address') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="flex justify-between text-base font-medium text-gray-900 mt-4">
                            <p>Address Information</p>
                        </div>
                        <div class="col-span-full mt-2">
                            <label for="street-address"
                                class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                            <div class="mt-2">
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1 mt-1">
                            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                            <div class="mt-2">
                                <input type="text" name="city" id="city" autocomplete="address-level2"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 mt-2">
                            <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State /
                                Province</label>
                            <div class="mt-2">
                                <input type="text" name="region" id="region" autocomplete="address-level1"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 mt-2">
                            <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP /
                                Postal code</label>
                            <div class="mt-2">
                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        
                        <div class="sm:col-span-3 mt-2">
                            <label for="PaymentMethod"
                                class="flex justify-between text-base font-medium text-gray-900 mt-3 ">Payment
                                Method</label>
                            <div class="mt-2 ">
                                <select id="PaymentMethod" name="PaymentMethod" autocomplete="PaymentMethod"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>KIBO Wallet</option>
                                    <option>Credit Card</option>
                                    <option>Cash On Delivery</option>
                                </select>
                            </div>
                        </div>
                        
                        

                        <div class="flex mt-6 justify-center">
                            <a href="/summary"
                                class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
