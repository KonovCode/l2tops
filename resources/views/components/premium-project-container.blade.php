<section class="w-full  my-1 px-0.5" style="min-width: 310px">
    <div class="w-full bg-gray-700 rounded-xl py-0.5 mt-3 mx-auto">
        <div class="flex py-1 justify-between items-center">
            <div class="flex items-center">
                
                @if($icon === 'rocket')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-red-500 mx-1.5 animate-bounce">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                </svg>
                @endif
                
                @if($icon === 'star')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6 text-yellow-500 mx-1.5 animate-spin">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
                @endif
                
                <h2 class="text-yellow-500 font-semibold md:font-bold text-xs md:text-sm">
                    {{$name}}
                </h2>
            </div>
            <div v-if="premium === 1"
                class="flex justify-between items-center bg-gradient-to-br from-pink-500 to-orange-400 font-semibold md:font-bold text-white rounded-lg text-xs px-1.5 md:px-3 py-0.5 animate-pulse mx-3 text-center">
                ПРЕМИУМ СЕРВЕРА
            </div>
        </div>
            
            {{$slot}}
        
        </div>
</section>        