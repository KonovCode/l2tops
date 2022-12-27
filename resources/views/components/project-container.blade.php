
<div class="mx-auto mt-3 bg-gray-300 pb-1" :class="premium === 1 ? 'bg-gray-700 rounded-xl pb-3' : 'bg-gray-300'">
    <div class="bg-gray-800 text-white py-1.5 flex justify-between items-center rounded">
        <h2 class="text-sm font-bold ml-3 flex" :class="premium === 1 ? 'text-red-500 flex' : 'text-blue-300'">
                {{ $title }}
        </h2>
    </div>


    {{$slot}}

</div>
