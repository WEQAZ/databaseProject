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

        <ul role="list" class="mt-6 grid grid-cols-1 md:grid-cols--2 gap-4">
          <li class="flex py-6">
            <div class="h-24 w-24 md:h-32 md:w-32 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
              <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
            </div>
            <div class="flex flex-col ml-4 md:ml-6">
              <div class="text-base font-medium text-gray-900">
                <div class="flex items-center justify-between">
                  <h3 class="flex space-x-[745px] text-lg font-semibold text-slate-900">
                    <div>Throwback Hip Bag</div>
                    <div>$180.00</div>
                  </h3>
                  
                </div>
                <p class="mt-1 text-sm text-gray-500">Salmon</p>
                <p class="mt-1 text-sm text-gray-500">qty 2</p>
                <div class="flex flex-1 items-end justify-between text-sm mt-2">
                  <p class="text-gray-500">$90</p>
                </div>
              </div>
            </div>
          </li>
        </ul>

        <div class="flex flex-col border-t border-gray-200 py-6 px-10 sm:px-4">
          <div class="flex justify-between text-base font-medium text-gray-900">
            <p>Subtotal</p>
            <p>$262.00</p>
          </div>
          <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
        </div>
        <div class="flex mt-6 justify-center">
          <a href="/summary" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
