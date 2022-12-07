@extends('Auth.index')

@section('auth-view')

<form action="{{route('password-email')}}" class="p-4" method="POST">

    @csrf

    <h3 class="text-blue-500 text-center font-bold">Сброс пароля</h3>

    @if(session('status')) 
        <p>Успешно !</p>
    @endif

    <hr class="my-3">

    <div class="mb-4 text-sm text-white">
            Забыли свой пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы отправим вам ссылку для сброса пароля, которая позволит вам выбрать новый.
    </div>

    <x-input type="email" name="email" id="email">Email</x-input>

    @error('login')
            <p>ошибка логин!</p>
        @enderror

    <section class="flex justify-evenly items-center">

        <x-button color="blue">Сбросить</x-button>

    </section>

</form>    

@endsection



