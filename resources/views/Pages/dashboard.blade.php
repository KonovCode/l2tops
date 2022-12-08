@extends('app')

@section('content')

<div>

    <x-dashboard-layout></x-dashboard-layout>

    <div class="border border-gray-700 my-2">

        @yield('dashboard-view')

    </div>

</div>

@endsection