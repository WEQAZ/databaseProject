<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order Confirmation') }}
        </h2>
    </x-slot>

    @php
        $total = 0;
    @endphp
    <div class="container mx-auto px-4 py-8 ">
        <div class="flex flex-col md:flex-row md:space-x-8">
            <div class="w-full md:w-3/5 bg-white border rounded-md p-4 shadow-sm">
                <div class="text-center mb-4 ">
                    <h1 class="text-xl font-bold">Order Successful! </h1>
                    <p class="text-gray-600">We're processing your order.</p>
                </div>
                <div class="border rounded-md p-4 shadow-sm">
                    <p class="mb-2">Thanks for your order! We've received it and are currently processing it. You'll
                        receive a confirmation email shortly with more details.</p>
                    @foreach ($payments as $paymentsItems)
                        <p>Tracking number: <span class="font-bold"> {{ $paymentsItems->id }}</span></p>
                    @endforeach
                </div>
                <div class="flex flex-col mt-4">
                    <div class="flex justify-between  font-bold mt-2 ld">Order Summary</div>
                    <ul class="list-disc pl-4">
                        @foreach ($carts as $cartsItems)
                            <li>{{ $cartsItems->product_name }}: <span class="font-bold">{{ $cartsItems->price * $cartsItems->quantity}}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="flex justify-between border-b pb-2 font-bold mt-2">
                        <span>Subtotal</span>
                        @foreach ($payments as $paymentsItems)
                            <span>{{ $paymentsItems->amount }}</span>
                        @endforeach
                    </div>
                    @foreach ($payments as $paymentsItems)
                        <div class="flex justify-between pb-2">
                            <span>Shipping</span>
                            <span>$10.00</span>
                        </div>
                        <div class="flex justify-between pb-2">
                            <span>Taxes</span>
                            <span>7 %</span>
                        </div>
                        @php
                            $total += ($paymentsItems->amount + 10) * 1.07;
                        @endphp

                        <div class="flex justify-between pt-2 border-t mt-2 font-bold">
                            <span class="text-xl">Total</span>
                            <span class="text-xl">${{ $total }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full mt-8 md:mt-0 md:w-2/5 border rounded-md p-4 shadow-sm bg-white">
                <div class="text-center mb-4 ">
                    <h2 class="text-xl font-bold">Shipping Information</h2>
                </div>

                
                    <div class="border bg-indigo rounded-md p-4 shadow-sm">
                        <p>{{ $orders->address }}</p>
                        <p>{{ $orders->province }}</p>
                        <p>{{ $orders->country }} {{ $orders->postalcode }}</p>
                        <p>Tel : 0{{ $orders->phonenumber }}</p>
                    </div>
                

                <div class="text-center mt-4">
                    <h2 class="text-xl font-bold mb-3 ">Payment Details</h2>
                </div>
                @foreach ($payments as $paymentsItems)
                    <div class="border rounded-md p-4 shadow-sm">
                        <p>Your payment method : {{ $paymentsItems->payment_method }}</p>
                    </div>
                @endforeach
                <div class="text-center mt-20">
                    <a href="/product"
                        class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
