@extends('Auth.index')

@section('auth-view')

    <form class="p-4" action="">

        <h3 class="text-blue-500 text-center font-bold">Регистрация аккаунта</h3>

        <hr class="my-3">

        <x-input type="text" name="login" id="login"> Введите логин </x-input>

        <x-input type="email" name="email" id="email"> Введите Email </x-input>

        <x-input type="password" name="password" id="password"> Введите пароль </x-input>

        <x-input type="password" name="confirm_password" id="confirm_password"> Подтверждение пароля </x-input>

        <section class="flex justify-evenly items-center">

            <x-link href="login">Уже есть аккаунт ?</x-link>

            <x-button color="blue">Зарегистрироваться</x-button>

        </section>

    </form>

@endsection