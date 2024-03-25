<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Cart') }}
        </h2>
    </x-slot>
    <div class="bg-white py-16 px-6 sm:px-8">
        <div class="max-w-7xl mx-auto border border-gray-300 rounded-lg shadow-md">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900 mt-2">Your Shopping Cart</h2>
                @if (session('message'))
                    <h6 class="alert alert-success"> {{ session('message') }} </h6>
                @endif
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
                                        <h3 class="space-x-[760px]  text-lg font-semibold text-slate-900">
                                            <div>{{ $items->product_name }}</div>

                                            <form action="{{ url('/delete_cart', $items->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn btn-danger">
                                                    <button class="" type="submit"
                                                        style="flex items-center justify-center rounded-md border  px-3 py-3 text-base font-medium  absolute">Delete</button>

                                                </div>

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
                            $totalprice += $items->price * $items->quantity;
                        @endphp
                    @endforeach
                </ul>

                <div class="flex flex-col border-t border-gray-200 py-6 px-10 sm:px-4">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                        <p>Subtotal</p>
                        <p>${{ $totalprice }}</p>
                    </div>
                    <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>


                    {{-- <div class="flex mt-6 justify-center">
                        <a href="post_summary"
                            class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">
                            Checkout
                        </a>
                    </div> --}}


                    {{-- Address Form --}}
                    {{-- <form action="{{ url('post_address_payment')}}" method="POST" enctype="multipart/form-data"> --}}
                    <form action="{{ url('post_summary') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex justify-between text-base font-medium text-gray-900 mt-4">
                            <p>Address Information</p>
                        </div>
                        <div class="col-span-full mt-2">
                            <label for="Address"
                                class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                            <div class="mt-2">
                                <input type="text" name="address" id="address" autocomplete="address"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1 mt-1">
                            <label for="province"
                                class="block text-sm font-medium leading-6 text-gray-900">Province</label>
                            <div class="mt-2">
                                <input type="text" name="province" id="province" autocomplete="address-level2"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 mt-2">
                            <label for="country"
                                class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                            <div class="mt-2">
                                <input type="text" name="country" id="country" autocomplete="address-level1"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 mt-2">
                            <label for="postalcode" class="block text-sm font-medium leading-6 text-gray-900">ZIP /
                                Postal code</label>
                            <div class="mt-2">
                                <input type="text" name="postalcode" id="postalcode" autocomplete="postalcode"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2 mt-2">
                            <label for="phonenumber" class="block text-sm font-medium leading-6 text-gray-900">
                                Phone Number</label>
                            <div class="mt-2">
                                <input type="text" name="phonenumber" id="phonenumber" autocomplete="phonenumber"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>


                        {{-- Payment Form --}}
                        <div class="sm:col-span-3 mt-2">
                            <label for="payment_method"
                                class="flex justify-between text-base font-medium text-gray-900 mt-3 ">Payment
                                Method</label>
                            <div class="mt-2 ">
                                <select id="payment_method" name="payment_method" autocomplete="payment_method"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>KIBO Wallet</option>
                                    <option>Credit Card</option>
                                    <option>Cash On Delivery</option>
                                </select>
                            </div>
                        </div>



                        <div class="flex mt-6 justify-center">
                            <button type="submit"
                                class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">
                                Checkout
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
