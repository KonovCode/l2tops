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
                    
                    <x-premium-project-container icon="rocket">

                        @slot('name')
                            Скоро откроются
                        @endslot

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
                    </x-premium-project-container>
                    
                    <x-premium-project-container icon="star">

                        @slot('name')
                            Уже открылись
                        @endslot

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
                        
                    </x-premium-project-container>
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

                @if (count($yesterday) !== 0)
                <x-project-container>

                    @slot('title')
                        Вчера
                    @endslot

                    @foreach ($yesterday as $project)
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
