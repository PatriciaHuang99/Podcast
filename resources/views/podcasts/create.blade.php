<x-layout>
    <x-page-heading>New podcast</x-page-heading>

    <x-forms.form method="POST" action="/podcasts">
        <x-forms.input label="Title" name="title" placeholder="3D printing" />
        <x-forms.input label="Description" name="description" placeholder="3D printing for mediacal..." />
        <x-forms.input label="Episode" name="episode" placeholder="1, 2, 3" />

        <x-forms.input label="Audio File Path" name="audio_file_path" placeholder="https://podcasters.apple.com/" />
        <x-forms.input label="Optional: Tags (comma separated)" name="tags" placeholder="art, technology, health" oninput="this.value = this.value.toLowerCase()" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>