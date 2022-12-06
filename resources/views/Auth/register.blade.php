@extends('Auth.index')

@section('auth-view')

    <form class="p-4" action="{{route('registred-user')}}" method="POST">

        @csrf

        <h3 class="text-blue-500 text-center font-bold">Регистрация аккаунта</h3>

        <hr class="my-3">

        <x-input type="text" name="name" id="name"> Введите логин </x-input>

        @error('login')
            <p>ошибка логин!</p>
        @enderror
        <x-input type="email" name="email" id="email"> Введите Email </x-input>
        @error('email')
            <p>ошибка email!</p>
        @enderror

        <x-input type="password" name="password" id="password"> Введите пароль </x-input>
        @error('password')
            <p>password error!</p>
        @enderror

        <x-input type="password" name="password_confirmation" id="password_confirmation"> Подтверждение пароля </x-input>
        @error('password_confirmation')
            <p>password_confirmation erorr!</p>
        @enderror

        <section class="flex justify-evenly items-center">

            <x-link href="login">Уже есть аккаунт ?</x-link>

            <x-button color="blue">Зарегистрироваться</x-button>

        </section>

    </form>

@endsection