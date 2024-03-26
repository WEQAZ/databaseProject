<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order History Summary') }}
        </h2>
    </x-slot>


    @foreach ($orders as $order)
        @php
            $subtotal = 0;
        @endphp
        <div class="container mx-auto px-4 py-8 ">
            <div class="flex flex-col md:flex-row md:space-x-8">
                <div class="w-full md:w-3/5 bg-white border rounded-md p-4 shadow-sm">
                    <div class="text-center mb-4 ">
                        <h1 class="text-xl font-bold">Order Successful! </h1>
                        <h4 class="text-xl font-medium">Order ID : {{ $order['header']->id }} </h4>
                        <p class="text-gray-600">We're processing your order.</p>
                    </div>
                    <div class="border rounded-md p-4 shadow-sm">
                        <p class="mb-2">Thanks for your order! We've received it and are currently processing it.
                            You'll
                            receive a confirmation email shortly with more details.</p>

                        <p>Tracking number: <span class="font-bold"> {{ $order['header']->id }}</span></p>

                    </div>
                    <div class="flex flex-col mt-4">
                        <div class="flex justify-between  font-bold mt-2 ld">Order Summary</div>
                        <ul class="list-disc pl-4">
                            @foreach ($order['details'] as $detail)
                                @php
                                    $itemTotal = $detail->price * $detail->quantity;
                                    $subtotal += $itemTotal;
                                @endphp
                                <li>{{ $detail->name }}: <span class="font-bold">${{ $itemTotal }}</span></li>
                            @endforeach
                        </ul>
                        <div class="flex justify-between border-b pb-2 font-bold mt-2">
                            <span>Subtotal</span>
                            <span>${{ $subtotal }}</span>
                        </div>
                        <!-- Calculate shipping, taxes, and total -->
                        @php
                            $shipping = 10.0; // Example shipping cost
                            $taxRate = 0.07; // Example tax rate
                            $tax = $subtotal * $taxRate;
                            $total = $subtotal + $shipping + $tax;
                        @endphp
                        <div class="flex justify-between pb-2">
                            <span>Shipping</span>
                            <span>${{ $shipping }}</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span>Taxes ({{ $taxRate * 100 }}%)</span>
                            <span>${{ $tax }}</span>
                        </div>
                        <div class="flex justify-between pt-2 border-t mt-2 font-bold">
                            <span class="text-xl">Total </span>
                            <span class="text-xl">${{ $total }}</span>
                        </div>

                    </div>
                </div>
                <div class="w-full mt-8 md:mt-0 md:w-2/5 border rounded-md p-4 shadow-sm bg-white">
                    <div class="text-center mb-4 ">
                        <h2 class="text-xl font-bold">Shipping Information</h2>
                    </div>


                    {{-- @if ($order['details']->isNotEmpty()) --}}
                    @php
                        $firstDetail = $order['details']->first();
                    @endphp
            
                    <div class="border bg-indigo rounded-md p-4 shadow-sm">
                        <p>{{ $firstDetail->address }}</p>
                        <p>{{ $firstDetail->province }}</p>
                        <p>{{ $firstDetail->country }} {{ $firstDetail->postalcode }}</p>
                        <p>Tel : 0{{ $firstDetail->phonenumber }}</p>
                    </div>
            
                    <div class="text-center mt-4">
                        <h2 class="text-xl font-bold mb-3 ">Payment Details History</h2>
                    </div>
            
                    <div class="border rounded-md p-4 shadow-sm">
                        <p>Your payment method: {{ $firstDetail->payment_method }}</p>
                        <p>Payment time: {{ $firstDetail->created_at }}</p>
                    </div>
                {{-- @else --}}
                    <p>No order details found for this order.</p>
                {{-- @endif --}}



                    <div class="text-center mt-20">
                        <a href="/product"
                            class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Continue
                            Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
