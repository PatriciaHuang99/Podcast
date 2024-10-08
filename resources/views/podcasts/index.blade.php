<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's listen to podcast!</h1>
            {{-- <form action="" class="mt-6">
                <input type="text" placeholder="Interests topics: latest news..." class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full max-w-xl">
            </form> --}}
            <x-forms.form action='/search' class="mt-6">
                <x-forms.input name='q' :label='false' placeholder='health ...'></x-forms.input>
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>Popular podcasts</x-section-heading>
            
    
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($popularPodcasts as $podcast)
                    <x-podcast-card :$podcast />
                @endforeach
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Podcast</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($podcasts as $podcast)
                    <x-podcast-card-wide :$podcast />
                @endforeach
            </div>
            
        </section>
    </div>
</x-layout>