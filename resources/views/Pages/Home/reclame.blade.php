@extends('Pages.general-page')

@section('general-page-content')

<div class="bg-gray-200 mx-0.5 rounded-lg border border-gray-700 mt-3">

    <h1 class="text-lg md:text-xl lg:text-2xl font-bold text-center my-5">Реклама</h1>

    <section class="w-full flex flex-wrap">   
        <div class="my-4 mx-auto md:mx-3 w-11/12 md:w-6/12 bg-orange-100 rounded-lg px-4 py-3">
        <h2 class="text-center mt-1 mb-3 font-bold text-blue-500">Бонусы при покупке статусов</h2>
        <section class=" bg-yellow-300 rounded-lg mt-3">
            <span
                class="p-1 my-1 flex text-red-600 justify-center items-center w-6 font-bold rounded mx-auto">
                <h6> VIP </h6>
            </span>

            <p class="tracking-wider text-center text-sm rounded-lg p-2 font-bold">
                Закрепление за сервером статуса VIP. Выделение золотым GOLD цветом + VIP иконка.
            </p>
        </section>
        <section class="top rounded-lg mt-3">
            <span
                class=" p-1 my-1 flex justify-center items-center w-36 font-bold rounded mx-auto">
                <h6> Super VIP </h6>
            </span>

            <p class="tracking-wider text-center text-sm rounded-lg p-2">
                Закрепление за сервером статуса SUPER VIP. Выделение красным BLOOD RED цветом + VIP иконка. Проект будет размещен в самых высоких позициях раздела.
            </p>
        </section>

        <section class="premium rounded-lg mt-3">
            <span
                class=" p-1 my-1 flex justify-center items-center w-36 font-bold rounded mx-auto">
                <h6 class="text-blue-800"> PREMIUM </h6>
            </span>

            <p class="tracking-wider text-center text-sm rounded-lg p-2">
                Закрепление за сервером статуса PREMIUM. Добавление проекта в отдельный PREMIUM блок. Возможность комбинировать данный статус с остальными, тем самым занимая наивысшие позиции рейтинга с заметным выделением Вашего проекта.
            </p>
        </section>

        </div>

        <div class="w-11/12 md:w-5/12  mx-auto my-4 bg-green-100 rounded-lg px-4 py-3">

        <h2 class="font-bold text-center text-blue-500 my-2">Статус прайс-лист</h2>
                @foreach($services as $service)
                @if($service->name === 'top')
                <ul class="top flex items-center justify-between mt-1 bg-yellow-200 pr-1">
                        <li class="flex items-center justify-between w-7/12 text-sm"> 
                            <span class="p-1 flex justify-center items-center w-6 font-bold rounded">
                                <h6> VIP </h6>
                            </span> 
                            {{$service->show_term}}
                        </li>
                            <li>$ {{$service->price}} </li>
                </ul>
                @endif
                @if($service->name === 'vip')
                <ul class="vip flex items-center justify-between border-b mt-1 bg-yellow-200 pr-1">
                     <li class="flex items-center justify-between w-7/12 text-sm"> 
                        <span class="p-2 flex justify-center items-center w-6 font-bold rounded">
                            {{strtoupper($service->name)}}
                        </span>  
                        {{$service->show_term}}
                    </li>
                        <li>$ {{$service->price}} </li>
                </ul>
                @endif
                
                @if($service->name === 'premium')
                <div class="flex pb-0.5">
                    <h2 class="mx-2 mt-6 font-bold text-blue-700">Premium</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-7 h-7 text-yellow-500 mt-6 animate-spin">
                   <path stroke-linecap="round" stroke-linejoin="round"
                   d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
               </svg>
                </div>
                <ul class="premium flex items-center justify-between bg-yellow-200 pr-1">
                        <li class="flex items-center justify-between w-7/12 text-sm"> 
                            <span class="p-1 flex justify-center items-center w-10 font-bold rounded">
                               L2
                            </span> 
                            {{$service->show_term}}
                        </li>
                            <li>$ {{$service->price}} </li>
                </ul>
                @endif
            @endforeach
            </div>
</section> 

<section class="w-full flex flex-wrap">   

    <section class="bg-indigo-300 w-11/12 mx-auto md:mx-3 md:w-6/12 rounded-lg mt-3">
        <span
            class="p-1 my-1 flex text-red-600 justify-center items-center w-6 font-bold rounded mx-auto">
            <h6> Баннер </h6>
        </span>

        <p class="tracking-wider text-center text-sm rounded-lg p-2 md:p-4 md:text-lg">
            Размещение рекламного баннера на главную страницу сайта. Дополнительно возможно заказать редактирование или создание анимированного баннера по Вашим желаниям. 
        </p>
    </section>

    <section class="w-11/12 md:w-5/12  mx-auto my-4 bg-orange-100 rounded-lg px-4 py-3">

        <h2 class="font-bold text-center text-blue-500 my-2">Баннер прайс лист</h2>
               @foreach($services as $service)
               @if($service->name === 'banner')
                <ul class="flex items-center justify-between border-b mt-1 bg-green-200 pr-1">
                     <li class="flex items-center justify-between w-7/12 text-sm"> 
                        <span class="p-2 flex justify-center items-center w-16 font-bold rounded">
                            {{strtoupper($service->name)}}
                        </span>  
                        {{$service->show_term}}
                    </li>
                        <li>$ {{$service->price}} </li>
                </ul>
                @endif
                @endforeach
    </section>
</section>    

<section class="w-10/12 mx-auto my-5 bg-blue-200 px-3 py-3 text-center rounded-xl italic">
    <h2 class="text-center font-bold my-1">Дополнительная информация</h2>
    <p>
        Также можно добавить проект на сайт без закрепления какого-либо статуса абсолютно бесплатно.  Более подробная информация по добавлению проектов на сайт размещена на странице <a class="text-blue-600" href="{{route('add.project.home')}}"> Добавить </a>
    </p>
</section>


</div>    

@endsection