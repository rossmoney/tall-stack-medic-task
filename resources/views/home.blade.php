@extends('layouts.app')

@section('content')

    <div class="space-y-4">

        <x-mos-ui::panel title="MOS | Interview Task" logo="{{ asset('mos.svg') }}">
            <x-slot:headerRight>
                <livewire:add-job-modal>
            </x-slot:headerRight>
        </x-mos-ui::panel>

        <livewire:browse-jobs-table />

    </div>

@endsection
