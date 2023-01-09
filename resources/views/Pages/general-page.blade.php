@extends('app')

@section('content')

    <link rel="stylesheet" href="{{ Vite::asset('resources/css/main.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/alert.css') }}">

        <x-header></x-header>


        <main id="main" style="background: linear-gradient({{$styles ? $styles->gradient : ''}}); padding-bottom: 10px;">
        
            @if($banner && $banner->publish)
                <a href="http://l2tops.net" target="_blank">
                    <img class="w-full" src="{{$banner->img}}" alt="">
                </a>
            @else 
                <img class="w-full" src="{{asset('storage/l2tops.net-banner.jpg')}}" alt="">
            @endif
        
                @yield('general-page-content')
    
        </main>


        <x-footer></x-footer>

    <script src="{{ Vite::asset('resources/js/main.js') }}"></script>

@endsection
