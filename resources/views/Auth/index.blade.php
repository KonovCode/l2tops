@extends('app')

@section('content')

<div class="bg-gray-200 h-screen">
    
    <a href="{{asset('/')}}" class="flex py-5 px-10 w-2/12 text-xl hover:text-blue-700 hover:underline text-blue-500">На главную</a>
    
    <div class="h-16 md:h-32 w-full flex justify-center">
        <p class="text-center my-auto text-3xl font-bold border-2 border-gray-500 px-2 py-0.5 rounded text-orange-500">l2tops.fun</p>
    </div>
    
        <div class="bg-gray-800 w-11/12 md:w-4/5 lg:w-2/5 rounded-lg m-auto">
            @yield('auth-view')
        </div>

</div>

@endsection