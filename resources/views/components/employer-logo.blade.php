@props(['employer','width' =>90])

<img src="{{ asset($employer->logo )}}" alt="employer-logo" class="rounded-xl" width="{{ $width }}">
{{--<img src="http://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}" alt="employer-logo" class="rounded-xl">--}}
{{--<img src="http://picsum.photos/seed/{{ rand(0,100000) }}/100/100" alt="employer-logo" class="rounded-xl">--}}
