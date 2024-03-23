<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Summary') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row md:space-x-8">
          <div class="w-full md:w-3/5">
            <div class="text-center mb-4">
              <h1 class="text-xl font-bold">Payment successful</h1>
              <p class="text-gray-600">Thanks for ordering!</p>
            </div>
            <div class="border-dashed border rounded-md p-4">
              <p class="mb-2">We appreciate your order, we're currently processing it. So hang tight and we'll send you confirmation very soon!</p>
              <p>Tracking number: <span class="font-bold">51547878755545848512</span></p>
            </div>
            <div class="flex flex-col mt-4">
              <div class="mb-2 font-bold">Order Summary</div>
              <div class="flex justify-between border-b pb-2">
                <span>Basic Tee</span>
                <span>$36.00</span>
              </div>
              <div class="flex justify-between border-b pb-2">
                <span>Color: Charcoal</span>
                <span></span>
              </div>
              <div class="flex justify-between border-b pb-2">
                <span>Size: L</span>
                <span></span>
              </div>
              <div class="flex justify-between border-b pb-2">
                <span>Artwork Tee - Iso Dots</span>
                <span>$36.00</span>
              </div>
              <div class="flex justify-between border-b pb-2">
                <span>Color: Peach</span>
                <span></span>
              </div>
              <div class="flex justify-between border-b pb-2">
                <span>Size: S</span>
                <span></span>
              </div>
              <div class="flex justify-between pt-2 font-bold">
                <span>Subtotal</span>
                <span>$72.00</span>
              </div>
              <div class="flex justify-between pt-2">
                <span>Shipping</span>
                <span>$8.00</span>
              </div>
              <div class="flex justify-between pt-2">
                <span>Taxes</span>
                <span>$6.40</span>
              </div>
              <div class="flex justify-between pt-2 border-t mt-2">
                <span class="text-xl font-bold">Total</span>
                <span class="text-xl font-bold">$86.40</span>
              </div>
            </div>
          </div>
          <div class="w-full mt-8 md:mt-0 md:w-2/5">
            <div class="text-center mb-4">
              <h2 class="text-xl font-bold">Shipping Address</h2>
            </div>
            <div class="border-dashed border rounded-md p-4">
              <p>Kristin Watson</p>
              <p>7363 Cynthia Pass</p>
              <p>Toronto, ON N3Y 4H8</p>
            </div>
            <div class="text-center mt-4">
              <h2 class="text-xl font-bold">Payment Information</h2>
            </div>
            <div class="border-dashed border rounded-md p-4">
              <p>VISA ending in 4242</p>
              <p>Expires 12/21</p>
            </div>
            <div class="text-center mt-4">
              <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Continue Shopping</a>
            </div>
          </div>
        </div>
      </div>
      

</x-app-layout>
