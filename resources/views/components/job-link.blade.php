@isset($value)
    <a
        href="{{ route('job.edit', $value) }}"
        class="px-3 py-1 text-red-600 border-2 border-transparent rounded-lg hover:border-blue-500 hover:bg-blue-100 hover:shadow-lg"
    >{{ str_pad($value, 6, '0', STR_PAD_LEFT) }}</a>
@endisset
