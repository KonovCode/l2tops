<header id="header" class="bg-gray-800 w-full py-2 flex justify-between items-center px-3 z-50 select-none`">
    <a class="reset_scroll_position" href="{{route('home')}}"> <img src="{{asset('storage/l2tops.net-logo.png')}}" alt="" class="w-20 h-6 md:w-32 md:h-11"> </a>

    <section class="font-bold text-white hidden md:block select-none">
        <a class="mx-3 reset_scroll_position hover:text-blue-500" href="{{route('reclame.index')}}">Реклама</a>
        <a class="mx-3 reset_scroll_position hover:text-blue-500" href="{{route('contact.index')}}">Контакты</a>
        <a class="mx-3 reset_scroll_position hover:text-blue-500" href="{{route('about.index')}}">О Нас</a>
    </section>

    <svg id="burger-header" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="md:hidden w-10 h-10 cursor-pointer select-none text-white">
         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>

    <a href="{{route('add.project.home')}}" class="reset_scroll_position text-xs select-none md:text-md text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-5 py-2 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
        Добавить
    </a>

</header>



      <nav id="header_nav" class=" hidden md:hidden w-full text-xl flex flex-col duration-200 bg-gray-200 px-2 py-1">
        <x-nav-link route="home" active="{{Route::currentRouteName()}}">l2tops.net</x-nav-link>
        <x-nav-link route="reclame.index" active="{{Route::currentRouteName()}}">Реклама</x-nav-link>
        <x-nav-link route="contact.index" active="{{Route::currentRouteName()}}">Контакты</x-nav-link>
        <x-nav-link route="about.index" active="{{Route::currentRouteName()}}">О нас</x-nav-link>
     </nav>
      


