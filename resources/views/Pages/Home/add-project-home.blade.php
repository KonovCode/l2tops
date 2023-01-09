@extends('Pages.general-page')

@section('general-page-content')

<div class="flex flex-wrap bg-gray-200 mx-0.5 md:mx-8 rounded-lg border border-gray-700 mt-3">

    @if(session('message'))
    <section class="fixed right-5 top-20">
    <x-alert-message type="success">
        {{session('message')}}
    </x-alert-message>
    </section>
    @endif

    @if($errors->any())
    <section class="fixed right-5 top-20">
    @foreach($errors->all() as $e_message)
    
    <x-alert-message type="error">
        {{$e_message}}
    </x-alert-message>
   
    @endforeach
    </section>
    @endif
    
    <div class="mx-auto">
        
        <div class="flex justify-center px-3 md:px-6 my-12 w-full">
            <!-- Row -->
            <div class="w-full flex flex-wrap">
                <!-- Col -->
                <div class="w-full lg:w-4/12 border rounded-l-lg" style="min-width: 300px">
                    
                    <section class="flex flex-col">
                        <div class="flex justify-evenly my-3 border rounded-lg px-1 py-2 mx-2 bg-gray-100">
                            <img src="{{asset('/storage/l2tops.net.png')}}" alt="l2tops.net">
                            <select class="select_logo_position h-10 rounded bg-gray-300" name="position">
                                <option value="topR">Сверху справа</option>
                                <option value="botR">Снизу справа</option>
                                <option value="topL">Сверху слева</option>
                                <option value="botL">Снизу слева</option>
                            </select>
                        </div>
                        
                            <textarea disabled class="logo-position-code mx-3 px-3 py-1 text-xs sm:text-sm md:text-lg lg:text-lg" cols="30" rows="7" style="resize: none">
                                  
                            </textarea>

                            <aside class="bg-blue-200 py-1 mx-3 mt-3 px-3 rounded-md border border-red-400">
                                <div class="flex justify-center items-center">
                                    <h2 class="text-center text-red-500 font-semibold"> Только этой зимой </h2>
                                    <svg class="h-6 w-6 mx-1.5 animate-pulse text-blue-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
                                        <path stroke="none" d="M0 0h24v24H0z"/>    
                                        <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" />   
                                        <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(60 12 12)" />    
                                        <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(120 12 12)" />    
                                        <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(180 12 12)" />    
                                        <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(240 12 12)" />    
                                        <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(300 12 12)" />  
                                </svg>
                                </div>
                                <small class="text-indigo-500 font-semibold">1. При добавлении нашей кнопки Vip статус на 30 дней в подарок!</small>
                                <br>
                                <small class="text-indigo-500 font-semibold">2. Добавление без кнопки полностью бесплатно!</small>
                            </aside>

                            <div class="border rounded-md mt-3 mx-2 pl-8 py-3 mb-2 bg-gray-100">
                                <ul class="list-decimal text-xs sm:text-sm md:text-lg lg:text-sm">
                                    <li class="mt-1">Заполните форму и нажмите добавить проект.</li>
                                    <li class="mt-1">Подождите пока модератор опубликует ваш проект (Обычно не более 3 часов).</li>
                                    <li class="mt-1">Розместите нашу кнопку у себя на сайте (скопируйте код и вставте на главную страницу вашего сайта).</li>
                                </ul>
                                
                            </div>
                            <p class="mt-1 text-orange-500 text-center mx-auto">Если возникли проблемы или вопросы перейдите в раздел <a class="text-blue-600" href="{{route('contact.index')}}">Контакты</a> и свяжитесь с нами!</p>

                            {{-- <div class="border rounded-md mt-3 mx-2 pl-8 py-3 mb-2 bg-gray-100">
                                <ul class="list-decimal text-xs sm:text-sm md:text-lg lg:text-sm">
                                    <li class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ad?</li>
                                    <li class="mt-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe.</li>
                                    <li class="mt-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                                    <li class="mt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi facere aut praesentium cupiditate cum ut?</li>
                                </ul>
                            </div> --}}
                        
                    </section>

                </div>
                <!-- Col -->
                
                <div class="w-full lg:w-8/12 bg-white p-2 md:p-5 rounded-lg m-auto" style="min-width: 290px">
                    <h3 class="my-5 text-2xl font-bold text-center">Добавить проект</h3>
                    <form action="{{route('add.new.project')}}" method="POST" class="px-4 md:px-8 pt-6 pb-8 mb-0.5 bg-white rounded">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0 w-full flex flex-col">
                                <label
                                    class="block mb-2 text-sm font-bold text-gray-700" for="title">
                                    Название
                                </label>
                                <input
                                    class="px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="title"
                                    type="text"
                                    name="title"
                                    placeholder="Название проекта"
                                />
                            </div>
                            <div class="md:ml-2 w-full flex flex-col">
                                <label
                                    class="block mb-2 text-sm font-bold text-gray-700" for="website">
                                    Ссылка на сайт
                                </label>
                                <input
                                    class="px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="website"
                                    type="text"
                                    name="website"
                                    value="https://"
                                    placeholder="https://l2high.top"
                                />
                            </div>
                        </div>
                        <div class="mb-4 w-full flex flex-col">
                            <label class="required block mb-2 text-sm font-bold text-gray-700">
                                Хроники
                            </label>
                            <select
                                 name="chronicles" class="border w-full border-gray-300 rounded-full h-10 pl-5 pr-10 text-gray-700 hover:border-gray-400 focus:outline-none appearance-none">
                                    <option value="interlude">Interlude</option>
                                    <option value="high five">High Five</option>
                                    <option value="interlude+">Interlude+</option>
                                    <option value="essence">Essence</option>
                                    <option value="epilogue">Epilogue</option>
                                    <option value="god">GoD</option>
                                    <option value="freya">Freya</option>
                                    <option value="classic">Classic</option>
                                    <option value="lindvior">Lindvior</option>
                                    <option value="gracia">Gracia</option>
                                    <option value="orfen">Orfen</option>
                                    <option value="helios">Helios</option>
                                    <option value="fafurion">Fafurion</option>
                                    <option value="etheia">Etheia</option>
                                    <option value="odyssey">Gracia</option>
                            </select>
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0 w-full flex flex-col">
                                <label
                                    class="block mb-2 text-sm font-bold text-gray-700" for="rates">
                                    Рейты
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="rates"
                                    name="rates"
                                    type="text"
                                    placeholder="1200"
                                />
                            </div>
                            <div class="md:ml-2 w-full flex flex-col">
                                <label
                                    class="block mb-2 text-sm font-bold text-gray-700" for="date_open">
                                    Дата открытия
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="date" name="date_open" id="date_open">
                                </div>
                        </div>
                        <div class="mb-3 text-center">
                            <button
                                class="scroll_position_btn w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">Добавить проект
                            </button>
                        </div>
                    </form>
                    @if(session('block_message')) 
                        <p class="px-3 py-2 text-center bg-orange-200 rounded-md w-2/3 mx-auto">{{session('block_message')}}</p>
                    @endif    
                </div>
            </div>
        </div>
    </div>

   

</div>    

<script src="{{Vite::asset('resources/js/add-project.js')}}"></script>

@endsection