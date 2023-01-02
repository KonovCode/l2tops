@extends('Pages.dashboard')


@section('dashboard-view')

<div class="flex flex-col">

   @if(session('message'))
    <section class="fixed right-5 top-20">
    <x-alert-message type="success">
        {{session('message')}}
    </x-alert-message>
    </section>
    @endif

    @if($errors->any())
    <section class="fixed right-5 top-20">
    @foreach($errors->all() as $e_message)
    
    <x-alert-message type="error">
        {{$e_message}}
    </x-alert-message>
   
    @endforeach
    </section>
    @endif
   
    @if($banner)
      <div style="background-image: url('{{asset($banner->img)}}')" class="bg-no-repeat bg-center bg-contain h-96"></div>
    @else
    <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTeVz_syqEdJ984gBkKveXY1L04XOgim3OvE-I_ijWd4nFmeUfvtZ6Xfk3K-RkQrz2Sg&usqp=CAU')" class="bg-no-repeat bg-center bg-contain h-96"></div>
    @endif
    <hr class="my-3">

   <section class="btns_block_controll mx-auto w-8/12 lg:w-4/12 flex justify-between my-5">

      @if(empty($banner))
      <x-button id="btn_add_banner" class="hover:bg-blue-700 border-blue-700 text-blue-700 mx-auto">Добавить баннер</x-button>
      @else
         <form action="{{route('delete.vip.banner', $banner->id)}}" method="post" class="mx-auto">
            @csrf
            <x-button id="btn_delete_banner" class="border-red-600 hover:bg-red-600 text-red-600">Удалить баннер</x-button>
         </form>
         @if(!$banner->publish) 
         <form action="{{route('add.publish.banner', $banner->id)}}" method="post" class="mx-auto">
            @csrf
            <x-button class="border-green-600 hover:bg-green-600 text-green-600">Опубликавать</x-button>
         </form>
         @else 
         <form action="{{route('hide.publish.banner', $banner->id)}}" method="post" class="mx-auto">
            @csrf
            <x-button class="border-orange-600 hover:bg-orange-600 text-orange-600 mx-auto">Убрать с сайта</x-button>
         </form>   
         @endif
      @endif
   </section>

   <form action="{{route('add.vip.banner')}}" method="post" enctype="multipart/form-data" class="form_add_banner w-10/12 lg:w-5/12 mx-auto bg-gray-200 py-4 px-5 rounded-md border-2 border-gray-800 hidden">

      <h4 class="text-center mt-1 mb-3 font-bold text-indigo-500">Загрузка баннера</h4>

      @csrf

      <section class="flex justify-evenly flex-wrap">
         <x-input type="text" name="title" id="title">Название проекта</x-input>
         <x-input type="text" name="link" id="link"> Ссылка на сайт </x-input>
      </section>

      <section class="flex justify-evenly flex-wrap">

         <label for="banner_file" class="bg-blue-700 text-sm py-1.5 text-center px-3 md:text-lg rounded text-white hover:bg-blue-600 cursor-pointer">
            Добавить изображение
            <input type="file" name="img" id="banner_file" class="hidden">
         </label>
        
         <label for="buy_term" class="flex items-center text-sm md:text-lg bg-gray-400 rounded py-0.5 px-2 mt-1">
            Срок действия
            <select name="buy_term" id="buy_term" class="ml-3">
               <option value="10">10 Дней</option>
               <option value="30">30 Дней</option>
               <option value="50">50 Дней</option>
            </select>
         </label>

         <input type="hidden" name="buy_date" value="{{\Carbon\Carbon::now()->toDateString()}}">
         
      </section>

      <section class="mt-5 md:w-full flex justify-around">

         <x-button class="cancel_form_btn scroll_position_btn hover:bg-red-600 text-red-600 border-red-600">Отмена</x-button>
         
         <x-button class="scroll_position_btn hover:bg-blue-700 text-blue-700 border-blue-700">Сохранить</x-button>
         
      </section>

   </form>

</div>
@endsection