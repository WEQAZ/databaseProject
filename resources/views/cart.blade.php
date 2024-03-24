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
            <div class="h-24 w-24 md:h-32 md:w-32 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
            <img src="{{$items['pic']}}" alt="">
            </div>
            <div class="flex flex-col ml-4 md:ml-6">
              <div class="text-base font-medium text-gray-900">
                <div class="flex items-center justify-between">
                <h3 class="flex space-x-[760px]  text-lg font-semibold text-slate-900">
                    <div>{{$items->product_name}}</div>
                    
          <a href="{{ url('delete_cart', ['id' => $items->product_id]) }}" onclick="return confirm('Are you sure to delete {{$items->product_name}} ?')"class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-3 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 absolute">
                
          <img src="upload/images/bin-2.png" alt="" style="width: 20px; height: 20px;">
          </a>
       
                  </h3>
                  
                </div>
                 <p class="mt-1 text-sm text-gray-500">{{$items->description}} </p>
                  <p class="mt-1 text-sm text-gray-500">qty: {{$items->quantity}}</p>
                <div class="flex flex-1 items-end justify-between text-sm mt-2">
                  <p class="text-gray-500">{{$items->price}} /piece</p>
                  
                </div>
                <div class="mt-1">Total: {{$items->price *  $items->quantity}}</div>  
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
        </div>
        <div class="flex mt-6 justify-center">
          <a href="/summary" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
