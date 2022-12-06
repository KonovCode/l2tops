@extends('Auth.index')

@section('auth-view')

<form action="" class="p-4">

    <h3 class="text-blue-500 text-center font-bold">Сброс пароля</h3>

    <hr class="my-3">

    <x-input type="email" name="email" id="email">Email</x-input>

    <x-input type="password" name="password" id="password">Пароль</x-input>

    <x-input type="password" name="password_confirmation" id="password_confirmation">Подтверждение пароля</x-input>

    <section class="flex justify-evenly items-center">

        <x-button color="blue">Сбросить пароль</x-button>

    </section>

</form>

@endsection