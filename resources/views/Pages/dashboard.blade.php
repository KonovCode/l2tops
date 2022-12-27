@extends('app')

@section('content')

<link rel="stylesheet" href="{{ Vite::asset('resources/css/alert.css') }}">

<div>

    <x-dashboard-layout></x-dashboard-layout>

    <div class="p-6">

        @yield('dashboard-view')

    </div>

</div>

<script src="{{ Vite::asset('resources/js/board.js') }}"></script>

@endsection