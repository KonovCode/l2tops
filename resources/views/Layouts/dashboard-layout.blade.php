<div class="flex py-4 border-b border-gray-700 bg-gray-200 items-center">
   <a class="mx-5 text-xl font-bold text-orange-500" href="#">l2tops.net</a>
   

   <!-- Desktop navbar -->
   <nav class="hidden md:flex justify-evenly  md:w-11/12 lg:w-8/12 mx-auto">

      <x-nav-link route="dashboard" active="{{Route::currentRouteName()}}">Главная</x-nav-link>
      <x-nav-link route="add.project" active="{{Route::currentRouteName()}}">Добавить проект</x-nav-link>
      <x-nav-link route="banners.index" active="{{Route::currentRouteName()}}">Баннеры</x-nav-link>
      <x-nav-link route="projects.index" active="{{Route::currentRouteName()}}">Проекты</x-nav-link>
      <x-nav-link route="users.index" active="{{Route::currentRouteName()}}">Пользователи</x-nav-link>
      <x-nav-link route="prices.index" active="{{Route::currentRouteName()}}">Цены</x-nav-link>

   </nav>


   <nav>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 cursor-pointer">
         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
   </nav>

   <x-link href="logout" class="mx-3">Выйти</x-link>

</div>


<script src="{{ Vite::asset('js/base.js') }}"></script>