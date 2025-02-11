@extends('layouts.app')

@section('content')
    <div class="space-y-4">

        <x-home-link />

        <livewire:job-details :job="$job" />

        <livewire:job-timings :job="$job" />

        <livewire:job-patients :job="$job" />

    </div>
@endsection
