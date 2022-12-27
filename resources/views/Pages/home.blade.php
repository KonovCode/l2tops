@extends('app')

@section('content')

    <link rel="stylesheet" href="{{ Vite::asset('resources/css/main.css') }}">

    <div>

        <x-header></x-header>

        <x-sort-nav></x-sort-nav>

        <div class="flex flex-wrap">

            {{-- Premium container --}}
            @if (count($premium) !== 0)
                <div class="w-full flex flex-wrap">

                    <section class="w-full lg:w-7/12 my-1" style="min-width: 310px">
                        <div class="w-full sm:w-11/12 bg-gray-700 rounded-xl py-2 mt-3 mx-auto">
                            <div class="flex py-1 justify-between">
                                <div class="flex">
                                    <svg v-if="premium === 1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 my-auto mx-2 text-yellow-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                                    </svg>
                                    <h2 class="text-yellow-500 font-bold">Топ проекты</h2>
                                </div>
                                <div v-if="premium === 1"
                                    class="flex justify-between items-center bg-gradient-to-br from-pink-500 to-orange-400 font-bold text-white rounded-lg text-xs px-3 py-0.5 animate-pulse mx-3 text-center">
                                    ПРЕМИУМ СЕРВЕРА
                                </div>
                            </div>

                            @foreach ($premium as $project)
                                <x-project-item status="{{ $project->status }}" premium="{{ $project->premium }}">
                                    @slot('project')
                                        {{ $project->title }}
                                    @endslot
                                    @slot('rates')
                                        {{ $project->rates }}
                                    @endslot
                                    @slot('chronicles')
                                        {{ $project->chronicles }}
                                    @endslot
                                    @slot('date_open')
                                        {{ \Carbon\Carbon::create($project->date_open)->format('d.m.y') }}
                                    @endslot
                                    @slot('date_open_mobail')
                                        {{ \Carbon\Carbon::create($project->date_open)->format('d.m') }}
                                    @endslot
                                </x-project-item>
                            @endforeach
                        </div>
                    </section>

                    <section class="w-full lg:w-5/12 flex items-center" style="min-width: 310px">
                        <div class="w-full sm:w-11/12 rounded-xl m-auto py-2 px-1 bg-gray-700">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7 mx-2 animate-pulse text-orange-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                                </svg>
                                <h2 class="text-yellow-500 text-lg font-bold">Не пропусти</h2>
                            </div>
                            <img class="rounded-xl mx-auto mt-1"
                                src="https://mmoculture.com/wp-content/uploads/2019/08/Lineage-2-Death-Knight-image-1-696x344.png"
                                alt="">
                                
                                <button class="relative inline-flex items-center justify-center my-2 p-0.5 w-full overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                    <span class="relative px-5 py-2 w-full transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                          Перейти на проект
                                    </span>
                                  </button>
                        </div>
                    </section>

                </div>
            @endif
            <section class="px-3 w-full md:w-6/12">

                @if (count($today) !== 0)
                    <x-project-container>

                        @slot('title')
                            Сегодня
                        @endslot

                        @foreach ($today as $project)
                            <x-project-item status="{{ $project->status }}" premium="{{ $project->premium }}">
                                @slot('project')
                                    {{ $project->title }}
                                @endslot
                                @slot('rates')
                                    {{ $project->rates }}
                                @endslot
                                @slot('chronicles')
                                    {{ $project->chronicles }}
                                @endslot
                                @slot('date_open')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m.y') }}
                                @endslot
                                @slot('date_open_mobail')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m') }}
                                @endslot
                            </x-project-item>
                        @endforeach

                    </x-project-container>
                @endif

                @if (count($nextSevenDays) !== 0)
                    <x-project-container>

                        @slot('title')
                            Ближайшик 7 дней
                        @endslot

                        @foreach ($nextSevenDays as $project)
                            <x-project-item status="{{ $project->status }}" premium="{{ $project->premium }}">
                                @slot('project')
                                    {{ $project->title }}
                                @endslot
                                @slot('rates')
                                    {{ $project->rates }}
                                @endslot
                                @slot('chronicles')
                                    {{ $project->chronicles }}
                                @endslot
                                @slot('date_open')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m.y') }}
                                @endslot
                                @slot('date_open_mobail')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m') }}
                                @endslot
                            </x-project-item>
                        @endforeach

                    </x-project-container>
                @endif

                @if (count($weekAndMore) !== 0)
                    <x-project-container>
                        @slot('title')
                            Через неделю и более
                        @endslot

                        @foreach ($weekAndMore as $project)
                            <x-project-item status="{{ $project->status }}" premium="{{ $project->premium }}">
                                @slot('project')
                                    {{ $project->title }}
                                @endslot
                                @slot('rates')
                                    {{ $project->rates }}
                                @endslot
                                @slot('chronicles')
                                    {{ $project->chronicles }}
                                @endslot
                                @slot('date_open')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m.y') }}
                                @endslot
                                @slot('date_open_mobail')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m') }}
                                @endslot
                            </x-project-item>
                        @endforeach

                    </x-project-container>
                @endif

            </section>
            <section class="px-3 w-full md:w-6/12">

                @if (count($tomorrow) !== 0)
                    <x-project-container>

                        @slot('title')
                            Завтра
                        @endslot

                        @foreach ($tomorrow as $project)
                            <x-project-item status="{{ $project->status }}" premium="{{ $project->premium }}">
                                @slot('project')
                                    {{ $project->title }}
                                @endslot
                                @slot('rates')
                                    {{ $project->rates }}
                                @endslot
                                @slot('chronicles')
                                    {{ $project->chronicles }}
                                @endslot
                                @slot('date_open')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m.y') }}
                                @endslot
                                @slot('date_open_mobail')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m') }}
                                @endslot
                            </x-project-item>
                        @endforeach

                    </x-project-container>
                @endif

                @if (count($previousSevenDays) !== 0)
                    <x-project-container>
                        @slot('title')
                            Предыдущие 7 дней
                        @endslot

                        @foreach ($previousSevenDays as $project)
                            <x-project-item status="{{ $project->status }}" premium="{{ $project->premium }}">
                                @slot('project')
                                    {{ $project->title }}
                                @endslot
                                @slot('rates')
                                    {{ $project->rates }}
                                @endslot
                                @slot('chronicles')
                                    {{ $project->chronicles }}
                                @endslot
                                @slot('date_open')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m.y') }}
                                @endslot
                                @slot('date_open_mobail')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m') }}
                                @endslot
                            </x-project-item>
                        @endforeach

                    </x-project-container>
                @endif

                @if (count($weekAgoAndMore) !== 0)
                    <x-project-container>
                        @slot('title')
                            Через неделю и более
                        @endslot

                        @foreach ($weekAgoAndMore as $project)
                            <x-project-item status="{{ $project->status }}" premium="{{ $project->premium }}">
                                @slot('project')
                                    {{ $project->title }}
                                @endslot
                                @slot('rates')
                                    {{ $project->rates }}
                                @endslot
                                @slot('chronicles')
                                    {{ $project->chronicles }}
                                @endslot
                                @slot('date_open')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m.y') }}
                                @endslot
                                @slot('date_open_mobail')
                                    {{ \Carbon\Carbon::create($project->date_open)->format('d.m') }}
                                @endslot
                            </x-project-item>
                        @endforeach

                    </x-project-container>
                @endif

            </section>
        </div>

        <x-footer></x-footer>

    </div>

    <script src="{{ Vite::asset('resources/js/main.js') }}"></script>

@endsection
