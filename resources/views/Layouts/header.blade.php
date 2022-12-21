<header class="bg-gray-800 w-full py-2 flex justify-between items-center px-3 z-50 select-none`">
    <img src="{{asset('storage/l2tops.fun.png')}}" alt="" class="w-20 h-6 md:w-32 md:h-10">

    <section class="font-bold text-white hidden md:block select-none">
        <a class="mx-3 hover:text-blue-500" href="">Реклама</a>
        <a class="mx-3 hover:text-blue-500" href="">Контакты</a>
        <a class="mx-3 hover:text-blue-500" href="">О Нас</a>
    </section>

    <svg id="burger-header" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="md:hidden w-10 h-10 cursor-pointer select-none text-white">
         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>

    <button type="button" class="text-xs select-none md:text-md text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
        Добавить
    </button>

</header>
{{-- <div class="w-full -z-10 select-none">
<div class="flex items-center mobail-nav-header"> --}}
      
      <nav id="header_nav" class="-translate-y-80 sticky -z-10 hidden md:hidden w-full text-xl flex flex-col duration-300 bg-gray-200 border-2 border-gray-800 rounded-b-xl px-2 py-1">
         <x-nav-link route="home" active="{{Route::currentRouteName()}}">l2tops.net</x-nav-link>
         <x-nav-link route="add.project" active="{{Route::currentRouteName()}}">Реклама</x-nav-link>
         <x-nav-link route="banners.index" active="{{Route::currentRouteName()}}">Контакты</x-nav-link>
         <x-nav-link route="projects.index" active="{{Route::currentRouteName()}}">О нас</x-nav-link>
      </nav>

    {{-- </div> --}}
{{-- </div> --}}


