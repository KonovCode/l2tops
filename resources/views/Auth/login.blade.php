@extends('Auth.index')

@section('auth-view')

<form action="" class="p-4">

    <h3 class="text-blue-500 text-center font-bold">Регистрация аккаунта</h3>

    <hr class="my-3">

    <x-input type="email" name="email" id="email">Логин</x-input>

    <x-input type="password" name="password" id="pass">Пароль</x-input>

    <section class="flex justify-evenly items-center">

        <x-link href="register">Зарегистрировать аккаунт ?</x-link>

        <x-button color="blue">Войти</x-button>

    </section>

</form>

@endsection