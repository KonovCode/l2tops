@extends('app')

@section('content')
<div class="bg-gray-200 h-screen">
    <x-link href="home" class="flex justify-end py-5 px-10 text-xl">На главную</x-link>
    <div class="h-48 w-full flex justify-center">
        <p class="text-center my-auto text-3xl font-bold border-2 border-gray-500 px-2 py-0.5 rounded text-orange-500">l2tops.fun</p>
    </div>
        <div class="bg-gray-800 w-2/5 rounded-lg mx-auto">
            @yield('auth-view')
        </div>
</div>
@endsection