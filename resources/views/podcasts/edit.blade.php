<x-layout>
    <x-page-heading>Edit podcast</x-page-heading>

    <x-forms.form method="POST" action="{{ url('podcasts/' . $podcast->id . '/update')}}">
        @csrf
        @method('PUT')

        <x-forms.input label="Title" name="title" value="{{ old('title', $podcast->title) }}" />
        <x-forms.input label="Description" name="description" value="{{ old('description', $podcast->description) }}" />
        <x-forms.input label="Episode" name="episode" value="{{ old('episode', $podcast->episode) }}" />

        <x-forms.input label="Audio File Path" name="audio_file_path" value="{{ old('audio_file_path', $podcast->audio_file_path) }}" />

        @php
        // Decode the JSON and extract tag names
        $tagsData = json_decode($podcast->tags, true);
        $tagNames = collect($tagsData)->pluck('name')->implode(', ');
        @endphp

        <x-forms.input label="Optional: Tags (comma separated)" name="tags" value="{{ old('tags', $tagNames) }}" oninput="this.value = this.value.toLowerCase()" />

        <x-forms.button>Edit</x-forms.button>
    </x-forms.form>

</x-layout>