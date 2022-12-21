@extends('app')

@section('content')

<link rel="stylesheet" href="{{ Vite::asset('resources/css/alert.css') }}">
<link rel="stylesheet" href="{{ Vite::asset('resources/css/dashboard.css') }}">


<div>

    <x-dashboard-layout></x-dashboard-layout>

    <div class="p-6">

        @yield('dashboard-view')

    </div>

</div>

<script src="{{ Vite::asset('resources/js/board.js') }}"></script>

@endsection