<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white">
        <!--
      Mobile menu
  
      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <div class="fixed inset-0 bg-black bg-opacity-25"></div>

            <div class="fixed inset-0 z-40 flex">
                <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
                <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                    <div class="flex px-4 pb-2 pt-5">
                        <button type="button"
                            class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="mt-2">
                        <div class="border-b border-gray-200">
                            <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                                <button id="tabs-1-tab-1"
                                    class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium"
                                    aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                                <button id="tabs-1-tab-2"
                                    class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium"
                                    aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                            </div>
                        </div>

                        <!-- 'Women' tab panel, show/hide based on tab state. -->
                        <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1"
                            role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                            alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                            alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Basic Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                            </div>
                            <div>
                                <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                                <ul role="list" aria-labelledby="women-clothing-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories
                                </p>
                                <ul role="list" aria-labelledby="women-accessories-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="women-brands-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 'Men' tab panel, show/hide based on tab state. -->
                        <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2"
                            role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                            alt="Drawstring top with elastic loop closure and textured interior padding."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                            alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Artwork Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                            </div>
                            <div>
                                <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                                <ul role="list" aria-labelledby="men-clothing-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories
                                </p>
                                <ul role="list" aria-labelledby="men-accessories-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="men-brands-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                        </div>
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                        </div>
                    </div>

                    <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                        </div>
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <a href="#" class="-m-2 flex items-center p-2">
                            <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                                class="block h-auto w-5 flex-shrink-0">
                            <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                            <span class="sr-only">, change currency</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <header class="relative bg-white">
            <p
                class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">
                Get free delivery on orders over $100</p>

            <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="border-b border-gray-200">
                    <div class="flex h-16 items-center">
                        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                        <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>

                        <!-- Logo -->
                        <div class="ml-4 flex lg:ml-0">
                            <a href="#">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="">
                            </a>
                        </div>

                        <!-- Flyout menus -->
                        <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                            <div class="flex h-full space-x-8">
                                <div class="flex">
                                    <div class="relative flex">
                                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                        <button type="button"
                                            class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                                            aria-expanded="false">Women</button>
                                    </div>

                                    <!--
                    'Women' flyout menu, show/hide based on flyout menu state.
  
                    Entering: "transition ease-out duration-200"
                      From: "opacity-0"
                      To: "opacity-100"
                    Leaving: "transition ease-in duration-150"
                      From: "opacity-100"
                      To: "opacity-0"
                  -->
                                    <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true">
                                        </div>

                                        <div class="relative bg-white">
                                            <div class="mx-auto max-w-7xl px-8">
                                                <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                                    <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                New Arrivals
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                                                    alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                Basic Tees
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                    </div>
                                                    <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                                                        <div>
                                                            <p id="Clothing-heading"
                                                                class="font-medium text-gray-900">Clothing</p>
                                                            <ul role="list" aria-labelledby="Clothing-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Tops</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Dresses</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Pants</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Denim</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sweaters</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">T-Shirts</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Jackets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Activewear</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Browse All</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Accessories-heading"
                                                                class="font-medium text-gray-900">Accessories</p>
                                                            <ul role="list" aria-labelledby="Accessories-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Watches</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Wallets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Bags</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sunglasses</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Hats</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Brands-heading" class="font-medium text-gray-900">
                                                                Brands</p>
                                                            <ul role="list" aria-labelledby="Brands-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">Full
                                                                        Nelson</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">My
                                                                        Way</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Re-Arranged</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Counterfeit</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Significant
                                                                        Other</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="relative flex">
                                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                        <button type="button"
                                            class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                                            aria-expanded="false">Men</button>
                                    </div>

                                    <!--
                    'Men' flyout menu, show/hide based on flyout menu state.
  
                    Entering: "transition ease-out duration-200"
                      From: "opacity-0"
                      To: "opacity-100"
                    Leaving: "transition ease-in duration-150"
                      From: "opacity-100"
                      To: "opacity-0"
                  -->
                                    <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true">
                                        </div>

                                        <div class="relative bg-white">
                                            <div class="mx-auto max-w-7xl px-8">
                                                <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                                    <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                                                    alt="Drawstring top with elastic loop closure and textured interior padding."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                New Arrivals
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                                                    alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                Artwork Tees
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                    </div>
                                                    <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                                                        <div>
                                                            <p id="Clothing-heading"
                                                                class="font-medium text-gray-900">Clothing</p>
                                                            <ul role="list" aria-labelledby="Clothing-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Tops</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Pants</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sweaters</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">T-Shirts</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Jackets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Activewear</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Browse All</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Accessories-heading"
                                                                class="font-medium text-gray-900">Accessories</p>
                                                            <ul role="list" aria-labelledby="Accessories-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Watches</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Wallets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Bags</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sunglasses</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Hats</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Brands-heading" class="font-medium text-gray-900">
                                                                Brands</p>
                                                            <ul role="list" aria-labelledby="Brands-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Re-Arranged</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Counterfeit</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">Full
                                                                        Nelson</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">My
                                                                        Way</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div
                                                    class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                                                    <div>
                                                        <h2
                                                            class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                                            Technical Specifications</h2>
                                                        <p class="mt-4 text-gray-500">The walnut wood card tray is
                                                            precision milled to perfectly fit a stack of Focus cards.
                                                            The powder coated steel divider separates active cards from
                                                            new ones, or can be used to archive important task lists.
                                                        </p>

                                                        <dl
                                                            class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                                                            <div class="border-t border-gray-200 pt-4">
                                                                <dt class="font-medium text-gray-900">Origin</dt>
                                                                <dd class="mt-2 text-sm text-gray-500">Designed by Good
                                                                    Goods, Inc.</dd>
                                                            </div>
                                                            <div class="border-t border-gray-200 pt-4">
                                                                <dt class="font-medium text-gray-900">Material</dt>
                                                                <dd class="mt-2 text-sm text-gray-500">Solid walnut
                                                                    base with rare earth magnets and powder coated steel
                                                                    card cover</dd>
                                                            </div>
                                                            <div class="border-t border-gray-200 pt-4">
                                                                <dt class="font-medium text-gray-900">Dimensions</dt>
                                                                <dd class="mt-2 text-sm text-gray-500">6.25&quot; x
                                                                    3.55&quot; x 1.15&quot;</dd>
                                                            </div>
                                                            <div class="border-t border-gray-200 pt-4">
                                                                <dt class="font-medium text-gray-900">Finish</dt>
                                                                <dd class="mt-2 text-sm text-gray-500">Hand sanded and
                                                                    finished with natural oil</dd>
                                                            </div>
                                                            <div class="border-t border-gray-200 pt-4">
                                                                <dt class="font-medium text-gray-900">Includes</dt>
                                                                <dd class="mt-2 text-sm text-gray-500">Wood card tray
                                                                    and 3 refill packs</dd>
                                                            </div>
                                                            <div class="border-t border-gray-200 pt-4">
                                                                <dt class="font-medium text-gray-900">Considerations
                                                                </dt>
                                                                <dd class="mt-2 text-sm text-gray-500">Made from
                                                                    natural materials. Grain and color vary with each
                                                                    item.</dd>
                                                            </div>
                                                        </dl>
                                                    </div>
                                                    <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg"
                                                            alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                                                            class="rounded-lg bg-gray-100">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg"
                                                            alt="Top down view of walnut card tray with embedded magnets and card groove."
                                                            class="rounded-lg bg-gray-100">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg"
                                                            alt="Side of walnut card tray with card groove and recessed card area."
                                                            class="rounded-lg bg-gray-100">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg"
                                                            alt="Walnut card tray filled with cards and card angled in dedicated groove."
                                                            class="rounded-lg bg-gray-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative overflow-hidden bg-white">
                                                <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
                                                    <div
                                                        class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                                                        <div class="sm:max-w-lg">
                                                            <h1
                                                                class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                                                Summer styles are finally here</h1>
                                                            <p class="mt-4 text-xl text-gray-500">This year, our new
                                                                summer collection will shelter you from the harsh
                                                                elements of a world that doesn't care if you live or
                                                                die.</p>
                                                        </div>
                                                        <div>
                                                            <div class="mt-10">
                                                                <!-- Decorative image grid -->
                                                                <div aria-hidden="true"
                                                                    class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                                                                    <div
                                                                        class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                                                        <div
                                                                            class="flex items-center space-x-6 lg:space-x-8">
                                                                            <div
                                                                                class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                                                <div
                                                                                    class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg"
                                                                                        alt=""
                                                                                        class="h-full w-full object-cover object-center">
                                                                                </div>
                                                                                <div
                                                                                    class="h-64 w-44 overflow-hidden rounded-lg">
                                                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg"
                                                                                        alt=""
                                                                                        class="h-full w-full object-cover object-center">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                                                <div
                                                                                    class="h-64 w-44 overflow-hidden rounded-lg">
                                                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg"
                                                                                        alt=""
                                                                                        class="h-full w-full object-cover object-center">
                                                                                </div>
                                                                                <div
                                                                                    class="h-64 w-44 overflow-hidden rounded-lg">
                                                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg"
                                                                                        alt=""
                                                                                        class="h-full w-full object-cover object-center">
                                                                                </div>
                                                                                <div
                                                                                    class="h-64 w-44 overflow-hidden rounded-lg">
                                                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg"
                                                                                        alt=""
                                                                                        class="h-full w-full object-cover object-center">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                                                <div
                                                                                    class="h-64 w-44 overflow-hidden rounded-lg">
                                                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg"
                                                                                        alt=""
                                                                                        class="h-full w-full object-cover object-center">
                                                                                </div>
                                                                                <div
                                                                                    class="h-64 w-44 overflow-hidden rounded-lg">
                                                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
                                                                                        alt=""
                                                                                        class="h-full w-full object-cover object-center">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Shop
                                                                    Collection</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                                <a href="#"
                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                            </div>
                        </div>

                        <div class="ml-auto flex items-center">
                            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign
                                    in</a>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create
                                    account</a>
                            </div>

                            <div class="hidden lg:ml-8 lg:flex">
                                <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Flag_of_Thailand.svg"
                                        alt="" class="block h-auto w-5 flex-shrink-0">
                                    <span class="ml-3 block text-sm font-medium">THB</span>
                                    <span class="sr-only">, change currency</span>
                                </a>
                            </div>

                            <!-- Search -->
                            <div class="flex lg:ml-6">
                                <a href="" class="p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Cart -->
                            <div class="ml-4 flow-root lg:ml-6">
                                <a href="cart" class="group -m-2 flex items-center p-2">
                                    <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    <span
                                        class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                    <span class="sr-only">items in cart, view bag</span>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>


            </nav>
        </header>

    </div>
</x-app-layout>
