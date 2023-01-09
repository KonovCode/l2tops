
<div class="mx-auto mt-3 mb-2 border-2 rounded-md border-gray-700 pb-1" :class="premium === 1 ? 'bg-gray-700 rounded-xl pb-3' : 'bg-gray-300'">
    <div class="bg-gray-800 text-white py-1.5 flex justify-between items-center rounded">
        <h2 class="text-xs font-semibold md:font-bold ml-0.5 sm:ml-3 flex md:text-sm" :class="premium === 1 ? 'text-red-500 flex' : 'text-blue-300'">
                {{ $title }}
        </h2>
    </div>


    {{$slot}}

</div>
