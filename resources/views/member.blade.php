<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Member') }}
        </h2>
    </x-slot>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
          <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$user->name}}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">{{$user->email}}</p>
            <div class="flex items-center gap-x-6 mt-10">
                <img class="h-16 w-16 rounded-full" src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-7&_nc_sid=5f2048&_nc_ohc=YknWlsUwj4wAX_0tYal&_nc_oc=AQmmys4_3MYR4p8fOKewI0O8AX64YIE3RHGEwa3fJ_2pf-8sjxh3V9dOBoKIY0YIqYA&_nc_ht=scontent.fbkk10-1.fna&oh=00_AfDyI1EZ5WIZkqDzDJKLZpNHBEvjdrN6K9W7SkRi0MPYbQ&oe=6615FFB8">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{$user->name}}</h3>
                  <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      
</x-app-layout>
