<x-app-layout>
    
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Order Confirmation') }}
    </h2>
  </x-slot>

  <div class="container mx-auto px-4 py-8 ">
    <div class="flex flex-col md:flex-row md:space-x-8">
      <div class="w-full md:w-3/5 bg-white border rounded-md p-4 shadow-sm">
        <div class="text-center mb-4 ">
          <h1 class="text-xl font-bold">Order Successful! </h1>
          <p class="text-gray-600">We're processing your order.</p>
        </div>
        <div class="border rounded-md p-4 shadow-sm">
          <p class="mb-2">Thanks for your order! We've received it and are currently processing it. You'll receive a confirmation email shortly with more details.</p>
          <p>Tracking number: <span class="font-bold">51547878755545848512</span></p>
        </div>
        <div class="flex flex-col mt-4">
          <div class="mb-2 font-bold">Order Summary</div>
          <ul class="list-disc pl-4">
            <li>Basic Tee - Charcoal (L): <span class="font-bold">$36.00</span></li>
            <li>Artwork Tee - Iso Dots - Peach (S): <span class="font-bold">$36.00</span></li>
          </ul>
          <div class="flex justify-between border-b pb-2 font-bold">
            <span>Subtotal</span>
            <span>$72.00</span>
          </div>
          <div class="flex justify-between pb-2">
            <span>Shipping</span>
            <span>$8.00</span>
          </div>
          <div class="flex justify-between pb-2">
            <span>Taxes</span>
            <span>$6.40</span>
          </div>
          <div class="flex justify-between pt-2 border-t mt-2 font-bold">
            <span class="text-xl">Total</span>
            <span class="text-xl">$86.40</span>
          </div>
        </div>
      </div>
      <div class="w-full mt-8 md:mt-0 md:w-2/5 border rounded-md p-4 shadow-sm bg-white">
        <div class="text-center mb-4 ">
          <h2 class="text-xl font-bold">Shipping Information</h2>
        </div>
        <div class="border bg-indigo rounded-md p-4 shadow-sm">
          <p>Kristin Watson</p>
          <p>7363 Cynthia Pass</p>
          <p>Toronto, ON N3Y 4H8</p>
        </div>
        <div class="text-center mt-4">
          <h2 class="text-xl font-bold mb-3 ">Payment Details</h2>
        </div>
        <div class="border rounded-md p-4 shadow-sm">
          <p>VISA ending in 4242</p>
          <p>Expires 12/21</p>
        </div>
        <div class="text-center mt-20">
          <a href="/product" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Continue Shopping</a>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
