<div class="flex justify-end mt-1.5">
    <div class="alert-message flex rounded items-center {{$type === 'success' ? 'bg-green-500' : 'bg-red-500'}} text-white text-sm font-bold px-1 py-0.5 md:px-2 md:py-2" role="alert">
        
        @if($type === 'success')
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
        </svg>
        @else 
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
        </svg>
        @endif

        <p class="text-xs lg:text-md">
            {{$slot}}
        </p>
    
    </div>
</div>