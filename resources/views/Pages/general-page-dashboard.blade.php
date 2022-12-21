@extends('Pages.dashboard')


@section('dashboard-view')


    <h1 class="mx-auto w-10/12 md:w-4/12 text-center text-2xl bg-gray-800 text-white p-1 mb-5 border-2 border-purple-300 rounded-lg font-bold">Статистика l2high</h1>
    <section class="flex justify-evenly flex-wrap mt-5 md:mt-20">

    <div class="w-10/12 md:w-6/12 lg:w-5/12 mt-3 border px-10 md:px-16 py-3 bg-gray-800 rounded" style="min-width: 320px">

    <h2 class="text-white text-xl text-center">Cтатистика проектов</h2>

    <div class="flex justify-between my-3 border-b border-purple-300">
            <h5 class="font-bold text-white">Всего проектов:</h5>
            <p class="text-white text-lg">count</p>
        </div>
        <div class="flex justify-between my-3 border-b border-purple-300">
            <h5 class="font-bold text-white">Запрсы на удаление:</h5>
            <p class="text-white text-lg">count</p>
        </div>
        <div class="flex justify-between my-3 border-b border-purple-300">
            <h5 class="font-bold text-white">Опубликованных:</h5>
            <p class="text-white text-lg">count</p>
        </div>
        <div class="flex justify-between my-3 border-b border-purple-300">
            <h5 class="font-bold text-white"> <span class="text-yellow-400"> Vip </span> проектов:</h5>
            <p class="text-white text-lg">count</p>
        </div>
        <div class="flex justify-between my-3 border-b border-purple-300">
            <h5 class="font-bold text-white"> <span class="text-red-500"> Top </span> проектов:</h5>
            <p class="text-white text-lg">count</p>
        </div>
        <div class="flex justify-between my-3 border-b border-purple-300">
            <h5 class="font-bold text-white"> <span class="text-blue-400"> Premium </span> проектов:</h5>
            <p class="text-white text-lg">0 из 7</p>
        </div>
       </div> 


        <div class="w-10/12 md:w-5/12 lg:w-3/12 mt-3 border bg-gray-800 px-10 py-3 rounded" style="min-width: 320px">
            <h2 class="text-white text-xl text-center">Статистика баннеров</h2>
        <div class="flex justify-between mt-3">
            <h4 class="text-white font-bold">Зарезервированых</h4> 
            <p class="text-lg text-white">0 из 7</p>
        </div>
        <aside class="mt-7 border border-purple-300 rounded-lg bg-gray-700">
            <h3 class="text-green-400 font-bold text-center mt-2">Из них опубликованно</h3>
            <div class="p-3 text-purple-300 font-bold text-8xl text-center">0/7</div>
        </aside>
    </div>

    <div class="w-10/12 lg:w-3/12 mt-3 border bg-gray-800 px-10 py-3 rounded" style="min-width: 320px">
        <h2 class="text-white text-xl text-center">Пользователи</h2>
        <div class="flex justify-between mt-3">
            <h4 class="text-white font-bold">Заблокированых</h4> 
            <p class="text-lg text-white">8 из 1000</p>
        </div>
        <aside class="mt-7 border border-purple-300 rounded-lg bg-gray-700">
            <h3 class="text-green-400 font-bold text-center mt-2">Зарегистрировано</h3>
            <div class="p-3 text-purple-300 font-bold text-8xl text-center">1000</div>
        </aside>
    </div>
    </section>


@endsection