@extends('Pages.dashboard')


@section('dashboard-view')

<div class="flex flex-col">
   
   <div class="bg-[url('https://ru.4game.com/lineage2ru/share-1200x630.jpg')] bg-no-repeat bg-center bg-contain h-96"></div>

   <hr class="my-3">

   <section class="mx-auto md:w-4/12 flex justify-between my-5 hidden">

      <x-button id="btn_add_banner" class="hover:bg-blue-700 border-blue-700 text-blue-700">Добавить баннер</x-button>

      <x-button id="btn_delete_banner" class="border-red-600 hover:bg-red-600 text-red-600">Удалить баннер</x-button>

   </section>

   <form action="" method="post" enctype="multipart/form-data" class="md:w-5/12 mx-auto bg-gray-200 py-4 px-5 rounded-md border-2 border-gray-800">

      <h4 class="text-center mt-1 mb-3">Загрузка баннера</h4>

      <x-input type="text" name="link" id="link"> Ссылка на сайт </x-input>

      <section class="flex justify-evenly">

         <label for="banner_file" class="bg-blue-700 py-1.5 px-3 rounded text-white hover:bg-blue-600 cursor-pointer">
            Добавить изображение
            <input type="file" name="img" id="banner_file" class="hidden">
         </label>
        
         <label for="term_active" class="flex items-center bg-gray-400 rounded py-0.5 px-2">
            Срок действия
            <select name="term_active" id="term_active" class="ml-3">
               <option value="10">10 Дней</option>
               <option value="30">30 Дней</option>
               <option value="50">50 Дней</option>
            </select>
         </label>
         
      </section>

      <section class="mt-5 md:w-full flex justify-around">

         <x-button class="hover:bg-blue-700 text-blue-700 border-blue-700">Сохранить</x-button>
         
         <x-button class="hover:bg-red-600 text-red-600 border-red-600">Отмена</x-button>
         
      </section>

   </form>

</div>
@endsection