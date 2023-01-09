@extends('Pages.dashboard')


@section('dashboard-view')

    <div>

        <table class="border-collapse w-11/12 mx-auto">
            <thead>
                <tr>
                    <th
                        class="p-2 font-bold uppercase bg-gray-800 text-white border border-gray-500 hidden lg:table-cell">
                        №</th>
                    <th
                        class="p-2 font-bold uppercase bg-gray-800 text-white border border-gray-500 hidden lg:table-cell">
                        Тип</th>
                    <th
                        class="p-2 font-bold uppercase bg-gray-800 text-white border border-gray-500 hidden lg:table-cell">
                        Длительность</th>
                    <th
                        class="p-2 w-3/12 font-bold uppercase bg-gray-800 text-white border border-gray-500 hidden lg:table-cell">
                        Цена</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td
                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">№</span>
                            {{$service->id}}
                    </td>
                    <td
                        class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Тип</span>
                        {{$service->name}}
                    </td>

                    <td
                        class="w-full lg:w-auto p-3 text-gray-800 block border border-b text-center lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Длительность</span>
                        {{$service->show_term}}
                    </td>

                    <td style="max-height: 50px"
                        class="lg:w-auto p-3 text-gray-800 border border-b text-center flex justify-center relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Цена</span>
                        <p class="show_price">
                            {{$service->price}}
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            class="get_form_price_update w-6 h-6 ml-2 cursor-pointer text-blue-400 hover:text-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <form action="{{route('price.update', $service->id)}}" method="POST" class="form_update_price flex justify-center hidden">
                            @csrf
                            <input type="string" name="price" class="w-2/4 h-6 text-xs" value="{{$service->price}}">

                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor"
                                    class="w-7 h-7 ml-2 text-green-400 hover:text-green-600 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </button>
                            

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                                class="close_form_update_price w-7 h-7 text-red-400 hover:text-red-600 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

@endsection