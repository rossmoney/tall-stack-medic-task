<x-mos-ui::collapsible-panel icon="comment" persist="job-details" title="Job Details: {{ Carbon\Carbon::parse($form->model->date)->format('jS M Y') }}">

    <div class="p-4 gap-4 grid sm:grid-cols-2">

        <x-mos-ui::select
            wire:model.live="form.category"
            label="Category"
            :options="\App\Enums\JobCategory::cases()"
            autosave
            />

        <x-mos-ui::input
            wire:model.blur="form.location"
            label="Location"
            autosave
            />
    </div>

    <div class="p-4">

        <x-mos-ui::textarea
            wire:model.live.debounce.1000ms="form.ops_text"
            label="Ops Text"
            autosave
            />

    </div>

</x-mos-ui::collapsible-panel>


