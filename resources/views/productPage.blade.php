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
                    <div class="group relative">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            {{-- <img src="{{asset('upload/product/'.$item->pic)}}" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full"> --}}
                            <img src="{{ asset($item->pic) }}" alt=""
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $item->name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $item->description }}</p>
                            </div>
                            <div class="mt-3">
                                <form action="{{ route('cart', $item->id) }}" method="POST" class="ml-4">
                                    @csrf
                                    <button type="Submit"
                                        class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-medium text-xs text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">ADD</button>
                                </form>
                            </div>

                        </div>
                        <p class="text-sm font-medium text-gray-900 mt-2">${{ $item->price }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
