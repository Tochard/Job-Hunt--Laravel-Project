<x-layout>
    <x-page-heading>Create a New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Job Title" placeholder="CEO" />
        <x-forms.input name="salary" label="Salary" type="text" placeholder="$50,000 USD" />
        <x-forms.input name="location" label="Job Location" placeholder="Florida, USA" />

        <x-forms.select name="schedule" label="Job Schedule">
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="Website URL" type="url" placeholder="https://jobsearch.com/jobs/ceo" />
        <x-forms.checkbox name="featured" label="Feature (Costs Extra)" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (Comma Separated)" placeholder="tech, coding, solutions" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
