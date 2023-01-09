@extends('Pages.general-page')

@section('general-page-content')

<x-sort-nav></x-sort-nav>

<div class="flex flex-wrap bg-gray-200 mx-0.5 md:mx-8 rounded-lg border border-gray-700">
     
    <section class="md:px-3 w-full lg:w-6/12">

        @if (count($premium_already_open) !== 0 || count($premium_open_soon) !== 0)
            
        @if(count($premium_open_soon) !== 0)
        <x-premium-project-container icon="rocket">

            @slot('name')
                Скоро откроются
            @endslot

            @foreach ($premium_open_soon as $project)
            <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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
        @endif

        @if(count($premium_already_open) !== 0)
        <x-premium-project-container icon="star">

            @slot('name')
                Уже открылись
            @endslot

            @foreach ($premium_already_open as $project)
            <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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
        @endif
    @endif

        @if (count($today) !== 0)
            <x-project-container>

                @slot('title')
                    Сегодня
                @endslot

                @foreach ($today as $project)
                    <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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

        @if (count($tomorrow) !== 0)
        <x-project-container>

            @slot('title')
                Завтра
            @endslot

            @foreach ($tomorrow as $project)
                <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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
                    <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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
                    <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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
    <section class="md:px-3 w-full lg:w-6/12">

        @if (count($yesterday) !== 0)
        <x-project-container>

            @slot('title')
                Вчера
            @endslot

            @foreach ($yesterday as $project)
                <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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
                    <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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
                Неделю назад и более
            @endslot

            @foreach ($weekAgoAndMore as $project)
                <x-project-item link="{{$project->website}}" status="{{ $project->status }}" premium="{{ $project->premium }}">
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

@if(!count($projects)) 
<aside class="flex justify-center items-center w-full h-80">
    <p class=" text-xl md:text-2xl text-center"> По вашему запросу не найдено не одного проекта =( </h3>
</aside>
@endif
</div>


@endsection