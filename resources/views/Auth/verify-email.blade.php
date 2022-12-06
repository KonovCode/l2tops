@extends('Auth.index')

@section('auth-view')

    <div class="p-4">

        <h3 class="text-blue-500 text-center font-bold">Регистрация аккаунта</h3>

        <hr class="my-3">

        <div class="mb-4 text-sm text-white">
            Спасибо за регистрацию! Прежде чем начать, не могли бы вы подтвердить свой адрес электронной почты, перейдя по ссылке, которую мы только что отправили вам по электронной почте? Если вы не получили письмо, мы с радостью вышлем вам другое.
        </div>

        <!-- <div class="mb-4 font-medium text-sm text-green-600">
            На адрес электронной почты, который вы указали при регистрации, была отправлена новая ссылка для подтверждения.
        </div> -->
        
        <form action="{{route('verification.send')}}" method="POST">

            @csrf

            <div class="mt-4 flex items-center justify-between">
                
                <x-button>
                    Высласть письмо повторно
                </x-button>
               
                <a href="{{asset('/')}}" class="text-blue-600 hover:underline mx-4">Выйти</a>
            
            </div>
        </form>

    </div>   

@endsection