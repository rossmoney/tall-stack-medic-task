<x-mos-ui::collapsible-panel title="Patients" icon="users" :count="$job->patients->count()" persist="job-patients">
    <x-slot:header-right>
        <div class="flex items-center space-x-2">
            @error('created')
                <div class="flex items-center gap-2 pl-1 text-xs font-medium text-green-500">
                    <x-fa-check class="w-3 h-3" />
                    <span>{{ $message }}</span>
                </div>
            @enderror

                <x-mos-ui::button wire:click="create" class="w-full">
                    <div class="flex items-center justify-center space-x-4">
                        <x-fa-plus />
                        <span class="text-sm uppercase tracking-wider">Add Patient</span>
                    </div>
                </x-mos-ui::button>
        </div>
    </x-slot>

    @if ($job->patients->count())
        <div class="grid gap-4 p-4 lg:grid-cols-2">
            @foreach ($job->patients as $patient)
                <a href="{{ route('patient.edit', $patient->id) }}">
                    <x-job-patient-card :patient="$patient" />
                </a>
            @endforeach
        </div>
    @endif
</x-mos-ui::collapsible-panel>
