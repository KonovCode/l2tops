@extends('Pages.dashboard')


@section('dashboard-view')

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


<div>


<section class="text-gray-600 body-font">
    <div class="container px-1 md:px-5 py-16 mx-auto">
      <div class="flex flex-wrap -m-4 text-center">
        
        @foreach($projects as $project)
        <div class="p-4 sm:w-1/2 lg:w-1/3 w-full">
          <div class="rounded-lg p-4 bg-gray-100 shadow-indigo-50 shadow-md {{$project->state_public ? '' : 'border border-red-500'}}">
            <section class="project_card flex items-center justify-between">
            <div>
              <h2 class="text-gray-900 text-lg font-bold">x{{$project->rates}}</h2>
              <h3 class="mt-2 text-xl font-bold text-green-500 text-left">{{$project->title}}</h3>
              <p class="text-sm font-semibold text-gray-400">{{$project->chronicles}}</p>
              <p class="text-sm font-semibold text-gray-400">{{$project->date_open}}</p>
              <button class="get_option_project text-sm mt-6 px-4 py-2 bg-[#304FFE]  text-white rounded-lg font-laonoto tracking-wider hover:bg-indigo-500 outline-none">Редактировать</button>
            </div>
            <div
              class="bg-gradient-to-tr from-blue-600 {{$project->status === 'top' ? 'to-red-600' : 'to-blue-600'}} shadow-[#304FFE] w-28 h-28 md:w-32 md:h-32 rounded-full shadow-2xl border-white  border-dashed border-2  flex justify-center items-center ">
              <div>
                <h1 class="text-2xl {{$project->status === 'vip' ? 'text-yellow-500' : 'text-white'}}">{{$project->status}}</h1>
                <small class="text-white">{{$project->status_term}}</small>
              </div>
            </div>
            </section>

            <div class="option_form_project hidden">
            <form action="{{route('update.status', $project->id)}}" method="POST">
                @csrf
                <div class="flex flex-col">
                    <h4>Статус</h4>
                    <section class="flex justify-evenly my-2">
                    <label for="top">
                        Top
                        <input type="radio" name="status" id="top" value="top" @checked($project->status === 'top')>
                    </label>
                    <label for="vip">
                        Vip
                        <input type="radio" name="status" id="vip" value="vip" @checked($project->status === 'vip')>
                    </label>
                    <label for="default">
                        Default
                        <input type="radio" name="status" id="default" value="default" @checked($project->status === 'default')>
                    </label>
                    </section>

                    <section class="flex justify-center">
                        <label class="flex justify-evenly items-center" for="add_term">
                           <small class="mr-1"> 
                            {{strtoupper($project->status)}} 
                            @if($project->status !== 'default')
                                активен до: 
                            @endif
                            </small>
                            
                            @if($project->status !== 'default')
                            <input class="text-xs" type="date" name="add_term" id="add_term" value="{{$project->status_term}}">
                            @else  
                            <input class="hidden" type="date" name="add_term" id="add_term" value="{{\Carbon\Carbon::now()->toDateString()}}">
                            @endif
                        </label>

                        
                    </section>
                    
                    <section class="flex justify-evenly my-3 items-center">
                        
                        <label for="premium_state">
                           <small> Premium </small>
                            <select class="text-xs" name="premium" id="premium_state">
                                <option value="1" @selected($project->premium)>Активен</option>
                                <option value="0" @selected(!$project->premium)>Не активен</option>
                            </select>
                        </label>

                        <button type="submit" class="scroll_position_btn text-xs px-3 py-1 bg-[#304FFE]  text-white rounded-lg font-laonoto tracking-wider hover:bg-indigo-500 outline-none">Применить изменения</button>

                    </section>
                </div>
            </form>
            <hr>
            <section class="flex justify-evenly mt-3"> 
                @if(!$project->state_public)
                <form action="{{route('add.publish.project', $project->id)}}" method="POST">
                    @csrf
                    <button class="scroll_position_btn text-xs px-3 py-2 bg-green-500  text-white rounded-lg font-laonoto tracking-wider hover:bg-green-600 outline-none">Опубликовать</button>
                </form>
                @else
                <form action="{{route('hide.ptoject', $project->id)}}" method="POST">
                    @csrf
                    <button class="scroll_position_btn text-xs px-3 py-2 bg-yellow-500  text-white rounded-lg font-laonoto tracking-wider hover:bg-yellow-600 outline-none">Убрать с сайта</button>
                </form>
                @endif

                <form action="{{route('delete.project', $project->id)}}" method="POST">
                    @csrf
                    <button class="scroll_position_btn text-xs px-3 py-2 bg-red-500  text-white rounded-lg font-laonoto tracking-wider hover:bg-red-600 outline-none">Удалить</button>
                </form>
                
                <button class="btn_close_option text-xs px-3 py-2 bg-orange-500  text-white rounded-lg font-laonoto tracking-wider hover:bg-orange-600 outline-none">Закрыть</button>

            </section>
        </div>
           
          </div>
        </div>
        @endforeach

      </div>
  </section>

    </div>

@endsection