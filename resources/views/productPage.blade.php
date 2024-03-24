<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 sm:px-6 sm:py-2 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($productAll as $item)
                    <div class="relative group" id="product-{{ $item->id }}">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none lg:h-80 relative">
                            <img src="{{ asset($item->pic) }}" alt=""
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full transition-opacity duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out flex justify-center items-center">


                            </div>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        {{ $item->name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $item->description }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $item->price }}</p>
                        </div>
                        <form action="{{ url('add_cart', $item->id) }}" method="POST" class="ml-4">
                            @csrf
                            <div class="row justify-center mx-2 my-2 ">
                                <div class="col-md-4">
                                    <input type="number" name="quantity" value="1" min="1"
                                        class="mb-2 w-20 h-8 border border-gray-300 rounded-md px-3 py-2 text-sm">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit"
                                        value="Add"class="h-8 px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-medium text-xs text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">

                                </div>
                            </div>
                        </form>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
