@props(['podcast'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $podcast->creator->name }}</div>
    <div class="py-8">
        <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">
            <a href="{{ $podcast->audio_file_path}}" target="_blank">
            {{ $podcast->title }}
            </a>
        </h3>
        <a class="text-sm text-gray-400 mt-6 mt-auto" href="{{ $podcast->audio_file_path}}">Episode: {{$podcast->episode}}</a>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($podcast->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-creator-logo :creator="$podcast->creator" :width="42"></x-creator-logo>
    </div>
    
</x-panel>