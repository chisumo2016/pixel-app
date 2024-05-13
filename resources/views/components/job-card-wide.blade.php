@props(['job'])

<x-panel class="flex gap-x-6 ">
    <div>
        <x-employer-logo></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#"
           class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>

        <h2 class="font-bold text-lg mt-3 group-hover:text-blue-800">{{ $job->title }}</h2>

        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary}}</p>
    </div>


    <!-- List of Tags --->
    <div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach

        </div>
        
    </div>
</x-panel>


{{--            <x-tag>Tag</x-tag>--}}
{{--            <x-tag>Tag</x-tag>--}}
