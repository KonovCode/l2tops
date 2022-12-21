@extends('Pages.dashboard')


@section('dashboard-view')

<div class="container mx-auto">
    @if(session('message'))
    <section class="fixed right-5 top-20">
    <x-alert-message type="success">
        Проект успешно добавлен!
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
    <div class="flex justify-center px-2 md:px-6 my-8">
        <!-- Row -->
        <div class="w-full xl:w-4/5 lg:w-11/12 flex">
            <!-- Col -->
            
            <div class="w-full relative h-auto bg-black hidden lg:block lg:w-5/12 bg-contain bg-center bg-no-repeat rounded-l-lg" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/4/47/Lineage_2_Logo.jpg')"></div>
            <!-- Col -->
            
            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none border bg-gray-100">
                <h3 class="pt-4 mb-1 text-2xl text-center font-semibold">Добавить проект</h3>
                <p class="text-xs font-bold text-end mx-1 text-blue-600">Доступно {{8 - $premiumCount}} premium из 8</p>                

                <form action="{{route('save.project')}}" method="POST" class="px-2 md:px-8 pt-2 md:pt-6 mt-2 pb-1 md:pb-4 mb-4 bg-white rounded flex-col">
                    <div class="mb-4 md:flex md:justify-between">
                        @csrf


                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="mb-1 md:mb-3 md:mr-2 md:mb-0 w-full flex flex-col">
                            <label class="block mb-1 text-xs font-bold text-gray-700 md:text-sm" for="title">
                                Название
                            </label>
                            <input class="px-2 py-1 text-xs md:px-3 md:py-2 md:text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="Название проекта" />

                        </div>
                        <div class="md:ml-2 w-full flex flex-col">
                            <label class="block mb-1 text-xs md:text-sm font-bold text-gray-700" for="website">
                                Ссылка на сайт
                            </label>
                            <input class="text-xs px-2 py-1 md:px-3 md:py-2 md:text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="website" type="text" name="website" placeholder="https://l2tops.net" />
                        </div>
                    </div>
                    <div class="mb-1 md:mb-3 w-full flex flex-col">
                        <label class="required block mb-1 text-xs md:text-sm font-bold text-gray-700">
                            Хроники
                        </label>
                        <select name="chronicles" class="border w-full border-gray-300 rounded-full text-sm md:text-md h-6 py-0 md:h-10 pl-5 pr-10 text-gray-700 hover:border-gray-400 focus:outline-none appearance-none">
                            <option value="Interlude">Interlude</option>
                            <option value="Gracia">Gracia</option>
                            <option value="Interlude+">Interlude+</option>
                        </select>

                    </div>

                    <div class="md:mb-4 md:flex md:justify-between">
                        <div class="md:mb-4 md:mr-2 md:mb-0 w-full flex flex-col">
                            <label class="block mb-1 text-xs md:text-sm font-bold text-gray-700" for="rates">
                                Рейты
                            </label>
                            <input class="w-full px-2 py-1 text-xs md:px-3 md:py-2 mb-1 md:mb-3 md:text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="rates" name="rates" type="text" placeholder="1200" />

                        </div>
                        <div class="md:ml-2 w-full flex flex-col">
                            <label class="block mb-1 text-xs md:text-sm font-bold text-gray-700" for="date_open">
                                Дата открытия
                            </label>
                            <input class="w-full px-2 py-1 text-xs md:px-3 md:py-2 mb-1 md:mb-3 md:text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="date" name="date_open" id="date_open">

                        </div>
                    </div>

                    <div class="flex flex-col m-auto w-1/1">
                        <h5 class="text-center text-sm font-bold text-gray-700">Status</h5>
                        <div class="border-1 border rounded border-gray-700 p-2 bg-gray-300">
                            <div class="flex justify-between">
                                <label for="">
                                    <small class="mr-1 text-red-600 font-bold text-xs sm:text-sm">Top</small>
                                    <input type="radio" name="status" value="top">
                                </label>
                                <label for="">
                                    <small class="mr-1 text-yellow-600 font-bold text-xs sm:text-sm">Vip</small>
                                    <input type="radio" name="status" value="vip">
                                </label>
                                <label class="text-center" for="">
                                    <small class="mr-1 text-xs sm:text-sm">Default</small>
                                    <input type="radio" name="status" value="default" checked>
                                </label>
                            </div>

                        </div>
                        <label class="m-auto mt-6 text-sm font-bold text-blue-600" for="">
                            Premium
                            <input class="ml-1" type="checkbox" name="premium" value="1">
                        </label>
                    </div>

                    <div class="my-4 text-center">
                        <button class="w-full px-4 py-1 text-sm md:text-md md:py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                            Добавить проект
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection