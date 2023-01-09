@extends('Pages.general-page')

@section('general-page-content')

<div class="flex flex-wrap bg-gray-200 mx-0.5 md:mx-8 rounded-lg border border-gray-700 mt-3">

    <section class="flex justify-evenly flex-wrap">
        <hr>
        <div class="my-4 w-full md:w-6/12">
        <div class="bg-orange-100 rounded-lg px-4 py-3" style="min-width: 300px">
            <h2 class="font-bold text-center my-1">Общая информация</h2>
            <p class="tracking-wider text-center">
                Проект был создан в поддержку легендарной игре в жанре MMORPG - Lineage II. Здесь собраны топ сервера л2 всех хроник и рейтов. Этот сайт разработали профики ла2, которые фанятся еще с открытия! В свое детище мы вложили все пожелания и предпочтения при выборе серверов л2, основанные на многолетнем опыте собственных поисков. Особенность данного сайта в том, что мы не стремимся к безграничному заработку, а нацелены на продвижение всех серверов l2. На сайте размещены сервера разной возрастной категории: как уже популярные - уже заслужившие доверие, так и новички - которые еще ищут свою аудиторию.
            </p>
        </div>
        <section class=" bg-blue-200 px-3 py-3 mt-5 text-center rounded-xl italic">
            <h2 class="text-center font-bold my-1">Сотрудничество</h2>
            <p>
                Мы помогаем развиваться новым и уже зарекомендовавших себя серверам Lineage 2.  Предоставляем бесплатное размещение на сайте для проектов с ограниченным бюджетом. А также дополнительные рекламные бонусы при первом размещении проекта. Для популярных проектов предоставляем статусную систему при добавлении на сайт и размещение баннера. Комбинация статуса и рекламного баннера  принесет максимальный трафик посетителей.  Не упусти свой шанс попасть на главный экран! Для связи с администрацией используйте страницу Контакты.
            </p>
        </section>
        </div>
        <div class="w-full md:w-4/12 my-4 rounded-lg px-4 py-3" style="min-width: 300px">
            <h2 class="font-bold text-center my-2 bg-gray-700 w-11/12 mx-auto rounded-md text-white text-lg">Преимущества</h2>
            <div class="bg-yellow-200 rounded-lg pb-2">
                <h3 class="text-center font-bold">Для пользователей</h3>
               <ul class="list-disc pl-6">
                <li class="mt-1.5">Анонсы серверов разных хроник и рейтов </li>
                <li class="mt-1.5">Удобный подбор серверов ла2 исходя из Ваших предпочтений</li>
                <li class="mt-1.5">Только актуальные рейтинги серверов l2</li>
                <li class="mt-1.5">Мониторинг новых серверов л2 и обновление каждый день</li>
               </ul>
            </div>
            
            <div class="bg-orange-200 rounded-lg pb-2 mt-2">
                <h3 class="text-center font-bold">Для админов</h3>
               <ul class="list-disc pl-6">
                <li class="mt-1.5">Наличие трех видов отображения серверов со своими бонусами</li>
                <li class="mt-1.5">Добавление баннера на главный экран</li>
                <li class="mt-1.5">Создание рекламного баннера (по желанию)</li>
                <li class="mt-1.5">Адекватные цены и дополнительные бонусы</li>
                <li class="mt-1.5">Круглосуточная связь с администрацией по любым вопросам</li>
               </ul>
            </div>
        </div>
        
    </section>

</div>



@endsection