    
<ul class="my-1.5 w-full px-0.5 sm:px-2">
    <li class="{{$status}} {{$premium}} grid grid-cols-12 border-gray-500 rounded h-10 p-0 sm:p-0.5 relative">
        <span
            class="grid project_params font-medium md:font-bold col-span-1 rounded h-full w-full text-xs sm:text-lg flex items-center justify-center">
            {{$status === 'default' ? 'L2' : 'VIP'}}
        </span>

        <p class="project_params text-xs font-bold sm:text-sm md:font-bold col-span-5 sm:col-span-4 flex items-center justify-center">
            {{ strtoupper($project) }}
        </p>
        <p class="project_params col-span-2 font-medium text-xs md:font-bold sm:text-sm flex items-center justify-center">
            {{ $rates }}
        </p>
        <p class="project_params col-span-3 font-medium text-xs md:font-bold sm:text-sm flex items-center justify-center">
            {{ $chronicles }}
        </p>
        <p  class="project_params hidden col-span-2 font-medium text-xs md:font-bold sm:text-sm  sm:flex items-center justify-center">
            {{ $date_open }}
        </p>

        <p  class="project_params sm:hidden col-span-1 font-medium text-xs md:font-bold sm:text-sm  flex items-center justify-center">
            {{ $date_open_mobail }}
        </p>
        
    </li>
</ul>