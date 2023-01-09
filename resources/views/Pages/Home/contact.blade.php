@extends('Pages.general-page')

@section('general-page-content')

<div class="flex flex-wrap bg-gray-200 mx-0.5 md:mx-8 rounded-lg border border-gray-700 mt-3">

    <div class="flex justify-between flex-wrap md:w-10/12 mx-auto h-80 items-center">
        <section class="flex flex-col w-full lg:w-5/12" style="min-width: 300px">
                <h2 class="font-bold text-center text-xl mb-3">Наши Контакты</h2>
            <ul class="flex xs:text-xs sm:text-sm md:text-md lg:text-xl justify-between mt-1">
                <li class="font-bold">Skype:</li>
                <li>l2high_skype</li>
            </ul>
            <ul class="flex xs:text-xs sm:text-sm md:text-md lg:text-xl justify-between mt-1">
                <li class="font-bold">Telegram:</li>
                <li>@l2tops.net</li>
            </ul>
            <ul class="flex xs:text-xs sm:text-sm md:text-md lg:text-xl justify-between mt-1">
                <li class="font-bold">Gmail:</li>
                <li>l2tops.net@gmail.com</li>
            </ul>
        
        </section>
        <blockquote class="w-full lg:w-6/12 bg-green-100 text-xl p-3 rounded-xl" style="min-width: 300px">
            Пишите нам по любым вопросам и предложениям, мы всегда идем на встречу нашим пользователям!
        </blockquote>
        </div> 

</div>    

@endsection