<x-mos-ui::collapsible-panel icon="newspaper" persist="patient-examination" title="Patient Examination">

    <div class="p-4 gap-4 grid sm:grid-cols-3">

        <x-mos-ui::select
            wire:model.live="form.airway"
            label="Airway"
            :options="\App\Enums\PatientExamination\Airway::cases()"
            autosave
        />

        <x-mos-ui::select
            wire:model.live="form.breathing"
            label="Breathing"
            :options="\App\Enums\PatientExamination\Breathing::cases()"
            autosave
        />

        <x-mos-ui::select
            wire:model.live="form.circulation"
            label="Circulation"
            :options="\App\Enums\PatientExamination\Circulation::cases()"
            autosave
        />

    </div>

    <div class="p-4 gap-4 grid sm:grid-cols-3">

        <x-mos-ui::select
            wire:model.live="form.eye_response"
            label="Eye Response"
            :options="\App\Enums\PatientExamination\GCS\EyeResponse::cases()"
            autosave
        />

        <x-mos-ui::select
            wire:model.live="form.verbal_response"
            label="Verbal Response"
            :options="\App\Enums\PatientExamination\GCS\VerbalResponse::cases()"
            autosave
        />

        <x-mos-ui::select
            wire:model.live="form.motor_response"
            label="Motor Response"
            :options="\App\Enums\PatientExamination\GCS\MotorResponse::cases()"
            autosave
        />

    </div>

    <x-mos-ui::input
        wire:model.live="form.glasgow_coma_scale"
        label="Glasgow Coma Scale Score"
        wrapperClass="p-5"
        disabled
        />

    <x-mos-ui::radio
        wire:model.live="form.entrapment"
        :options="App\Enums\YesNo::cases()"
        wrapperClass="p-5"
        autosave
        />

    <x-mos-ui::textarea
        wire:model.live.debounce.1000ms="form.secondary_survey"
        label="Secondary Survey"
        wrapperClass="p-5"
        autosave
        />

</x-mos-ui::collapsible-panel>