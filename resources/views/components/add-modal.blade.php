<x-mos-ui::dialog wire:model="modalOpen">
    <x-mos-ui::dialog.open>
        <x-mos-ui::button>
            <div class="flex items-center space-x-4 uppercase">
                <x-fa-plus-circle />
                <span>{{ $title }}</span>
            </div>
        </x-mos-ui::button>
    </x-mos-ui::dialog.open>

    <x-mos-ui::dialog.panel>
        <form
            wire:submit="submit"
            {{ $attributes }}
            wire:loading.class="opacity-50"
            class="flex flex-col gap-4"
        >
            <h2 class="mb-1 text-3xl font-bold">{{ $title }}</h2>

            <hr class="w-full dark:border-base-700" />

            {{ $slot }}

            <x-mos-ui::dialog.footer>
                <x-mos-ui::dialog.close>
                    <x-mos-ui::button colour="secondary" wire:click="cancel" type="button">Cancel</x-mos-ui::button>
                </x-mos-ui::dialog.close>

                <x-mos-ui::button type="submit" dusk="save">Save</x-mos-ui::button>
            </x-mos-ui::dialog.footer>
        </form>
    </x-mos-ui::dialog.panel>
</x-mos-ui::dialog>
