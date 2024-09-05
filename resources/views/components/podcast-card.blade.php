@props(['podcast'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $podcast->creator->name }}</div>
    <div class="py-8">
        <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">{{ $podcast->title }}</h3>
        <p class="text-sm mt-4">{{ $podcast->audio_file_path}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($podcast->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-creator-logo :width="42"></x-creator-logo>
    </div>
    
</x-panel>