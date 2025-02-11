 <div class="flex items-center px-4 py-2 rounded-md bg-primary-100 hover:bg-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 border border-primary-300 text-primary-700 dark:text-white">
    <div class="flex flex-grow items-center space-x-8">
        <div>
            <span class="text-2xl font-semibold uppercase tracking-wide">{{ $patient->padId }}</span>
        </div>
        <div class="flex flex-grow flex-col">
            <div class="flex items-center space-x-2">
                <span class="font-semibold">{{ $patient->full_age }}</span>
                <span class="text-yellow-700 dark:text-yellow-200">{{ $patient->sex?->label() }}</span>
            </div>
        </div>
    </div>
    <div class="ml-4">
        <x-mos-ui::delete-confirmation-button
            title="Patient {{ $patient->pad_id }}"
            wire:click="delete({{ $patient->id }})"
        >
            <x-mos-ui::icon-button icon="trash" colour="red" />
        </x-mos-ui::delete-confirmation-button>
    </div>
 </div>
