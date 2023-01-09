@extends('Pages.dashboard')


@section('dashboard-view')




    <div>
        <section style="background: linear-gradient({{$styles ? $styles->gradient : ''}})" class="container rounded-lg p-3 w-full sm:w-8/12 md:w-6/12 lg:w-4/12 bg-gray-100 shadow-indigo-50 shadow-md border border-gray-300">
            
            <form action="{{route('add.gradient')}}" method="POST"class="flex items-center flex-col">
                @csrf

                <h3 class="text-blue-500 font-bold md:text-sm text-xs">Градиент для сайта</h3>
                
                @if(!$styles)
                <label class="my-3 w-full flex justify-evenly" for="gradient">
                    <input class="color_code_input rounded-lg w-9/12 px-2 my-1 text-sm" type="text" name="gradient" id="gradient" placeholder="linear-gradient('Color code insert')">
                    <button class="reset_gradient_input text-xs text-blue-600 hover:text-blue-800 cursor-pointer">Очистить</button>
                </label>
            
            
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-xs sm:text-sm md:text-md px-1 my-2 md:px-2 py-1 text-white rounded mx-auto">Добавить</button>
                @endif
            </form>

            @if($styles)    
            <form action="{{route('delete.gradient', $styles->id)}}" method="POST" class="flex items-center py-8">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-xs sm:text-sm md:text-md px-1 my-2 md:px-2 py-1 text-white rounded mx-auto">Удалить</button>
            </form>
            @endif
        </section>

       

    </div>

    

@endsection