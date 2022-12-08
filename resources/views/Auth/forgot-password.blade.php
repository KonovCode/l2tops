@extends('Auth.index')

@section('auth-view')

<form action="{{route('password-email')}}" class="p-4" method="POST">

    @csrf

    <h3 class="text-blue-500 text-center font-bold">Сброс пароля</h3>

    @if(session('status')) 
        <x-success-message>
            Сылка на сброс пароля было успешно отправлена!
        </x-success-message>
    @endif

    <hr class="my-3 lg:my-4">

    <div class="mb-4 text-sm text-white">
            Забыли свой пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы отправим вам ссылку для сброса пароля, которая позволит вам выбрать новый.
    </div>

    <x-input type="email" name="email" id="email">Email</x-input>

    @if($errors->any())
    @foreach($errors->all() as $e_message)
            <x-error-message>{{$e_message}}</x-error-message>
        @endforeach
    @endif

    <section class="flex justify-evenly items-center">

        <x-button color="blue">Сбросить</x-button>

    </section>

</form>    

@endsection



