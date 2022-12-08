@extends('Auth.index')

@section('auth-view')

<form action="{{route('login-user')}}" class="p-4" method="POST">

    @csrf

    <h3 class="text-blue-500 text-center font-bold">Регистрация аккаунта</h3>

    @if(session('status'))
        <x-success-message>Пароль успешно изменен!</x-success-message>
    @endif
    
    <hr class="my-3 lg:my-4">

    <x-input type="email" name="email" id="email">Логин</x-input>

    <x-input type="password" name="password" id="pass">Пароль</x-input>

    @if($errors->any())
        @foreach($errors->all() as $e_message)
            <x-error-message>{{$e_message}}</x-error-message>
        @endforeach
    @endif

    <section class="flex justify-evenly items-center">

        <div class="flex flex-col justify-center">
            <x-link href="register">Зарегистрировать аккаунт ?</x-link>
            <x-link href="forgot-password">Cброс пароля</x-link>
        </div>

        <x-button color="blue">Войти</x-button>

    </section>

</form>

@endsection