@extends('Auth.index')

@section('auth-view')

    <form class="p-4" action="{{route('registred-user')}}" method="POST">

        @csrf

        <h3 class="text-blue-500 text-center font-bold">Регистрация аккаунта</h3>

        <hr class="my-3 lg:my-4">

        <x-input type="text" name="name" id="name"> Введите логин </x-input>

        <x-input type="email" name="email" id="email"> Введите Email </x-input>

        <x-input type="password" name="password" id="password"> Введите пароль </x-input>

        <x-input type="password" name="password_confirmation" id="password_confirmation"> Подтверждение пароля </x-input>
        
        @if($errors->any())
            @foreach($errors->all() as $e_message)
                <x-error-message>{{$e_message}}</x-error-message>
            @endforeach
        @endif

        <section class="flex justify-evenly items-center">

            <x-link href="login">Уже есть аккаунт ?</x-link>

            <x-button color="blue">Зарегистрироваться</x-button>

        </section>

    </form>

@endsection