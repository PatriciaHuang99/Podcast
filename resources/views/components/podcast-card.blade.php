@props(['podcast'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">Video Producer</h3>
        <p class="text-sm mt-4">Full time - From $60,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($podcast->tags as $tag)
                <x-tag :$tag size="small"> Art </x-tag>
            @endforeach
        </div>

        <x-creator-logo :width="42"></x-creator-logo>
    </div>
    
</x-panel>