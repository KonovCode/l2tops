
<a class="text-center my-0.5 reset_scroll_position {{$selected == 'active' ? 'bg-gray-700 px-1.5 py-0.5 text-white rounded' : 'text-gray-800'}}" href="{{route($route)}}">
    {{$slot}}
</a>