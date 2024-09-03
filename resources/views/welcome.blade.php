<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's listen to podcast!</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Interests topics: latest news..." class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Jobs</x-section-heading>
            
    
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-podcast-card/>
                <x-podcast-card/>
                <x-podcast-card/>
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Podcast</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-podcast-card-wide/>
                <x-podcast-card-wide/>
                <x-podcast-card-wide/>
            </div>
            
        </section>
    </div>
</x-layout>