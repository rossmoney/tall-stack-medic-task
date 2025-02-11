<x-mos-ui::collapsible-panel icon="newspaper" persist="patient-details" title="Patient Details">

        <div class="space-y-1 ml-4 mb-2">
            <div class="mb-2 flex space-x-2 text-lg md:text-2xl">
                <a
                    href="{{ route('job.edit', $form->model->job_id) }}"
                    class="-m-2 block rounded-md p-2 text-primary-900 hover:bg-base-200 dark:text-primary-200 dark:hover:bg-primary-700"
                >
                    Job {{ $form->model->job->id }}
                </a>
                <div class="pl-1">{{ Carbon\Carbon::parse($form->model->job->date)->format('jS M Y') }}</div>
            </div>
        </div>

        <div class="p-4 gap-4 grid sm:grid-cols-3">

            <x-mos-ui::input wire:model.blur="form.name" autosave />

            <x-mos-ui::date wire:model.blur="form.dob" autosave />

            <x-mos-ui::radio
                wire:model.live="form.sex"
                :options="App\Enums\Gender::cases()"
                autosave
            />

        </div>

        <div class="p-4 gap-4 grid sm:grid-cols-2">

            <x-mos-ui::age wire:model.live="form.age" autosave />

            <x-mos-ui::input wire:model.blur="form.weight" label="weight (kg)" type="number" autosave />

        </div>

        <x-mos-ui::textarea
            wire:model.live.debounce.1000ms="form.hpc"
            label="Presenting Complaint"
            wrapperClass="p-5"
            autosave
            />

        <x-mos-ui::textarea
            wire:model.live.debounce.1000ms="form.pmh"
            label="Past Medical History"
            wrapperClass="p-5"
            autosave
            />


</x-mos-ui::collapsible-panel>
