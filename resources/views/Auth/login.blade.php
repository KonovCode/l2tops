@extends('Auth.index')

@section('auth-view')

<form action="{{route('login-user')}}" class="p-4" method="POST">

    @csrf

    <h3 class="text-blue-500 text-center font-bold">Регистрация аккаунта</h3>

    @if(session('status'))
        <p>Пароль успешно изменен!</p>
    @endif
    <hr class="my-3">

    <x-input type="email" name="email" id="email">Логин</x-input>

    <x-input type="password" name="password" id="pass">Пароль</x-input>

    <section class="flex justify-evenly items-center">

        <div class="flex flex-col justify-center">
            <x-link href="register">Зарегистрировать аккаунт ?</x-link>
            <x-link href="forgot-password">Cброс пароля</x-link>
        </div>

        <x-button color="blue">Войти</x-button>

    </section>

</form>

@endsection