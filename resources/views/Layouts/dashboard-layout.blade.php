<div class="flex justify-between py-4 border-b border-gray-700 bg-gray-200 items-center" style="max-height: 70px">

   <img src="{{asset('storage/l2tops.net-logo.png')}}" alt="" class="w-20 h-6 md:w-32 md:h-10">
   

   <!-- Desktop navbar -->
   <nav class="hidden md:flex justify-evenly  md:w-11/12 lg:w-8/12 mx-auto text-sm lg:text-lg">

      <x-nav-link route="dashboard" active="{{Route::currentRouteName()}}">Главная</x-nav-link>
      <x-nav-link route="add.project" active="{{Route::currentRouteName()}}">Добавить</x-nav-link>
      <x-nav-link route="banners.index" active="{{Route::currentRouteName()}}">Баннеры</x-nav-link>
      <x-nav-link route="projects.index" active="{{Route::currentRouteName()}}">Проекты</x-nav-link>
      <x-nav-link route="prices.index" active="{{Route::currentRouteName()}}">Цены</x-nav-link>

   </nav>

   
   
      <svg id="burger-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="md:hidden w-9 h-9 cursor-pointer">
         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>

      <x-link href="logout" class="mx-3">
         <svg class="w-7 h-7 text-gray-700 hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
      </x-link>


</div>

<div class="flex items-center">
      
      <nav class="mobail-nav hidden md:hidden w-full text-xl flex flex-col duration-200 bg-gray-200 px-2 py-1">
         <x-nav-link route="dashboard" active="{{Route::currentRouteName()}}">Главная</x-nav-link>
         <x-nav-link route="add.project" active="{{Route::currentRouteName()}}">Добавить</x-nav-link>
         <x-nav-link route="banners.index" active="{{Route::currentRouteName()}}">Баннеры</x-nav-link>
         <x-nav-link route="projects.index" active="{{Route::currentRouteName()}}">Проекты</x-nav-link>
         <x-nav-link route="prices.index" active="{{Route::currentRouteName()}}">Цены</x-nav-link>
      </nav>
</div>


<script src="{{ Vite::asset('resources/js/base.js') }}"></script>