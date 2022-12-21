@extends('Pages.dashboard')


@section('dashboard-view')

<div class="flex flex-wrap">

    @if($errors->any())
    <section class="fixed right-5 top-20">
    @foreach($errors->all() as $e_message)
    
    <x-alert-message type="error">
        {{$e_message}}
    </x-alert-message>
   
    @endforeach
    </section>
    @endif

    @if(session('message'))
    <section class="fixed right-5 top-20">
    <x-alert-message type="success">
        {{Session::get('message')}}
    </x-alert-message>
    </section>
    @endif


<section class="flex justify-center items-start flex-col mx-auto w-11/12 lg:w-5/12">

    <h2 class="text-center bg-gray-800 w-9/12 lg:w-5/12 sm:mx-2 mt-2 rounded-md text-white font-bold">Vip баннер</h2>
    <div id="vip_banner_container" class="flex my-3 items-end rounded-md max-h-[320px] min-h-[300px] w-full" style="
    @if($vip_banner) 
    background: url('{{$vip_banner->img}}') no-repeat center; background-size: cover; 
    @else
    background: url('https://pbs.twimg.com/media/ETTpfJ-XQAQnrJP.jpg') no-repeat center; background-size: cover;
    @endif">

        <section class="vip_btn_group flex justify-evenly w-full items-center mb-3">
    
            <button id="get_vip_form_btn" class=" @if(!$vip_banner) block @else hidden @endif` text-white bg-blue-500 px-3 py-2 rounded hover:bg-blue-600">Загрузить</button>
            
            @if($vip_banner)
            <form action="{{route('delete.vip.banner', $vip_banner->id)}}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 rounded p-2 mb-0.5 hover:bg-red-600 text-white font-bold">Удалить</button>
            </form>
            @endif
        </section>
        <form id="vip_banner_form" class="bg-gray-200 w-full py-2 px-4 rounded-md hidden" action="{{route('add.vip.banner')}}" method="POST" enctype="multipart/form-data">

            <h6 class="text-center mb-3 sm:mb-0.5">Добавить баннер</h6>
            @csrf
            
            <div class="flex w-full">
                <section class="flex flex-col w-7/12">
                    <x-input type="text" name="title" id="title">Заголовок</x-input>
                    <x-input type="text" name="link" id="website">Ссылка на сайт</x-input>
                </section>

                <input type="hidden" name="buy_date" value="{{\Carbon\Carbon::now()->toDateString()}}">

                <label class="flex flex-col w-4/12 m-auto text-xs md:text-lg" for="buy_term">
                    Срок действия
                    <select class="mt-2" name="buy_term" id="buy_term">
                        <option value="7">7 Дней</option>
                        <option value="15">15 Дней</option>
                        <option value="30">30 Дней</option>
                        <option value="60">60 Дней</option>
                    </select>
                </label>
            </div>
            
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-20 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-5 h-5 sm:w-7 sm:h-7 sm:mb-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-1 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" name="img" class="hidden" />
                </label>
            </div> 
            
            <section class="flex justify-evenly">

                <button class="btn-close-form text-white mt-2 w-5/12 bg-red-500 px-3 py-2 rounded hover:bg-red-600">Закрыть</button>
                
                <button type="submit" class="text-white mt-2 w-6/12 bg-blue-500 px-3 py-2 rounded hover:bg-blue-600">Добавить</button>

            </section>

        </form>
    </div>
</section>
<section class="w-11/12 lg:w-5/12 mx-auto">
    <h3 class="bg-gray-800 rounded-md sm:mx-2 mt-2 w-9/12 lg:w-5/12 text-white font-bold text-center">Параметры баннеров</h3>
    <ul class="bg-orange-200 mt-3 px-2 rounded-md py-3">
        <li class="md:px-32 text-sm sm:text-lg">
             <h5 class="text-center font-bold">Vip</h5>
                <section class="flex justify-between">
                    <p> Ширина изображения: </p> 
                    <p>600-630  px</p>
                </section>

                <section class="flex justify-between">
                    <p> Высота изображения: </p> 
                    <p>300-320  px</p>
                </section>

                <section class="flex justify-between">
                    <p> Формат изображения: </p> 
                    <p>png, jpeg</p>
                </section>

                <section class="flex justify-between">
                    <p> Длина заголовка: </p> 
                    <p> до 25 Символов </p>
                </section>
        </li>
    
        <li class="md:px-32 text-sm sm:text-lg">
            <h5 class="text-center font-bold">Слайд</h5>
                <section class="flex justify-between">
                    <p> Ширина изображения: </p> 
                    <p>700-750  px</p>
                </section>

                <section class="flex justify-between">
                    <p> Высота изображения: </p> 
                    <p>325 px</p>
                </section>

                <section class="flex justify-between">
                    <p> Формат изображения: </p> 
                    <p>png, jpeg</p>
                </section>

                <section class="flex justify-between">
                    <p> Длина заголовка: </p> 
                    <p> до 20 Символов </p>
                </section>
        </li>
        
    </ul>
</section>
</div>
<hr>

<h2 class="text-center bg-gray-800 w-4/12 mt-3 rounded-md text-white font-bold mx-auto">Слайд баннеры</h2>
<div class="container mx-auto mt-3 p-1 border border-3 border-dark">
    <!-- img-size 700x320 -->
    <div id="banner_list" class="flex flex-col md:flex-row w-full py-5">
        @foreach($banners as $banner)
            <x-dashboard-banner 
            slide="{{$banner->path_img}}"
            >

            <form class="slide_banner_form bg-gray-200 w-full py-2 px-4 h-full rounded-md hidden" action="{{route('add.banner', $banner->id)}}" method="POST" enctype="multipart/form-data">
                <h6 class="text-center mb-3 sm:mb-0.5">Добавить баннер </h6>
                 @csrf   
                <div class="flex w-full bg-gray-200">
                    <section class="flex flex-col w-7/12">
                        <x-input type="text" name="name_project" id="name_project">Заголовок</x-input>
                        <x-input type="text" name="url" id="url">Ссылка на сайт</x-input>
                    </section>
        
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        
                    <label class="flex flex-col w-4/12 m-auto text-xs md:text-lg" for="buy_term">
                        Срок действия
                        <select class="mt-2" name="buy_term" id="buy_term">
                            <option value="7">7 Дней</option>
                            <option value="15">15 Дней</option>
                            <option value="30">30 Дней</option>
                            <option value="60">60 Дней</option>
                        </select>
                    </label>
                </div>
                
                <div class="flex items-center justify-center w-full">
                    <label for="slide-file{{$banner->id}}" class="flex flex-col items-center justify-center w-full h-20 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-5 h-5 sm:w-7 sm:h-7 sm:mb-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-1 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="slide-file{{$banner->id}}" type="file" name="img" class="hidden" />
                    </label>
                </div> 

                
                <section class="flex justify-evenly">
        
                    <button class="close_slide_form text-white mt-2 w-5/12 bg-red-500 px-3 py-2 rounded hover:bg-red-600">Закрыть</button>
                    
                    <button type="submit" class="scroll_position_btn text-white mt-2 w-6/12 bg-blue-500 px-3 py-2 rounded hover:bg-blue-600">Добавить</button>
        
                </section>
             </form>   

             <div class="banner_btn flex justify-evenly w-full bg-gray-800 py-1.5">
                @if($banner->reserved)
                <form action="{{route('delete.banner', $banner->id)}}" method="POST">
                    @csrf
                    <button class="text-white scroll_position_btn bg-red-500 px-3 py-0.5 rounded hover:bg-red-600">Удалить</button>
                </form>
                @if($banner->state === 0)
                <form action="{{route('publish.banner', $banner->id)}}" method="POST">
                    @csrf
                    <button class="text-white scroll_position_btn bg-green-500 px-3 py-0.5 rounded hover:bg-green-600">Опубликовать</button>
                </form>
                @else
                <form action="{{route('hide.banner', $banner->id)}}" method="POST">
                    @csrf
                    <button class="text-white scroll_position_btn bg-orange-500 px-3 py-0.5 rounded hover:bg-orange-600">Скрыть</button>
                </form>
                @endif
               @endif
                <button class="btn_open_slide_form text-white bg-blue-500 px-3 py-0.5 rounded hover:bg-blue-600 @if($banner->reserved) hidden @else block @endif">Загрузить</button>
            </div>
            </x-dashboard-banner>
        @endforeach
    </div>
</div>
@endsection