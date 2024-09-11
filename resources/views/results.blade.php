<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="ßspace-y-6">
        @foreach ($podcasts as $podcast)
            <x-podcast-card-wide :$podcast />
        @endforeach
    </div>
</x-layout>