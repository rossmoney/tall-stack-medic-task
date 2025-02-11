@extends('layouts.app')

@section('content')

    <div class="space-y-4">

        <x-home-link/>

        <livewire:patient-details :patient="$patient"/>

        <livewire:patient-examination :examination="$patient->examination"/>

    </div>

@endsection
