<x-layout>
    <x-page-heading>Create New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Campbellfield,Melbourne" />

        <x-forms.select label="Schedule" name="schedule">
            <option> Full Time </option>
            <option> Part Time </option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com" />
        <x-forms.checkbox label="Feature (Extra Costs)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Frontend, Backend" />
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>