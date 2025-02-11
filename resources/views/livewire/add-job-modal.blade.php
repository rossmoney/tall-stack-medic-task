<x-add-modal wire:keydown.enter="submit">

    <x-slot:title>
        Add Job
    </x-slot:title>

    <x-mos-ui::select
        wire:model="category"
        label="Category"
        :options="\App\Enums\JobCategory::cases()"
        />

        <x-mos-ui::input
        wire:model="location"
        label="Location"
        />

        <x-mos-ui::time
        wire:model="time_999"
        label="999 Time"
    />
</x-add-modal>
