<x-mos-ui::collapsible-panel icon="clock" persist="job-timings" title="Job Timings">

    <div class="p-4 gap-4 grid sm:grid-cols-2 lg:grid-cols-4">

            <x-mos-ui::time
                wire:model.live="form.time_999"
                label="999"
                autosave
            />

            <x-mos-ui::time
                wire:model.live="form.time_hems"
                label="HEMS"
                autosave
            />

            <x-mos-ui::time
                wire:model.live="form.time_lift"
                labek="Lift"
                autosave
            />
            <x-mos-ui::time
                wire:model.live="form.time_land_scene"
                label="Land Scene"
                autosave
            />

            <x-mos-ui::time
                wire:model.live="form.time_scene"
                label="Scene"
                autosave
            />

            <x-mos-ui::time
                wire:model.live="form.time_depart"
                label="Depart"
                autosave
            />

            <x-mos-ui::time
                wire:model.live="form.time_land_hospital"
                label="Land Hospital"
                autosave
            />

            <x-mos-ui::time
                wire:model.live="form.time_hospital"
                label="Hospital"
                autosave
            />

    </div>


    <div class="grid gap-x-4 gap-y-8 p-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 2xl:grid-cols-8">
        <x-duration-card name="dispatch" :value="$form->model->dispatch_duration" />
        <x-duration-card name="launch" :value="$form->model->launch_duration" />
        <x-duration-card name="scene" :value="$form->model->scene_duration" />
        <x-duration-card name="transit" :value="$form->model->transit_duration" />
    </div>

</x-mos-ui::collapsible-panel>

