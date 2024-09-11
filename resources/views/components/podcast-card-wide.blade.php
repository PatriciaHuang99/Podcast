@props(['podcast'])

<x-panel class="flex gap-x-6">
    <div>
        <x-creator-logo></x-creator-logo>
    </div>
    
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400">{{ $podcast->creator->name }}</a>
        <a href="{{ $podcast->audio_file_path }}">
            <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">{{ $podcast->title }}</h3>
        </a>
        <a class="text-sm text-gray-400 mt-auto" href="{{ $podcast->audio_file_path }}">Episode: {{$podcast->episode}}</a>
    </div>

    <div>
        <div>
            @foreach ($podcast->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
    
</x-panel>