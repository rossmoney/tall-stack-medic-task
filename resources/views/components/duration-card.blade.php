@isset($value)
    <div class="rounded bg-primary-200 px-2 py-1 dark:bg-primary-700">
        <x-mos-ui::label>{{ $name }}</x-mos-ui::label>
        <div class="flex items-end justify-end space-x-2">
            <div class="text-xl">{{ $value }}</div>
            <div>minutes</div>
        </div>
    </div>
@endisset
