@extends('Auth.index')

@section('auth-view')

<form action="{{route('password.update')}}" class="p-4" method="POST">

    @csrf

    <h3 class="text-blue-500 text-center font-bold">Сброс пароля</h3>

    <hr class="my-3 lg:my-4">

    <input type="hidden" name="token" value="{{ $request->token }}">

    <x-input type="email" name="email" id="email" value="{{$request->email ? $request->email : ''}}"> Email</x-input>

    <x-input type="password" name="password" id="password">Пароль</x-input>

    <x-input type="password" name="password_confirmation" id="password_confirmation">Подтверждение пароля</x-input>

    @if($errors->any())
        @foreach($errors->all() as $e_message)
            <x-error-message>{{$e_message}}</x-error-message>
        @endforeach
    @endif

    <section class="flex justify-evenly items-center">

        <x-button color="blue">Сбросить пароль</x-button>

    </section>

</form>

@endsection