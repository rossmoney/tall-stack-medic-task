<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Livewire\Forms\PatientDetailsForm;
use MedicOneSystems\MosUI\Traits\Autosaving;

class PatientDetails extends Component
{
    use Autosaving;

    public PatientDetailsForm $form;

    public function mount(Patient $patient)
    {
        $this->form->init($patient);
    }

    public function updatedFormDob($value)
    {
        $age = (Carbon::parse($value)->diffInDays($this->form->model->job->date) < 1)
            ? 0.001
            : Carbon::parse($value)->floatDiffInYears($this->form->model->job->date);

        $this->form->update(['age' => number_format($age, 4)]);
        $this->autosave('age');
        $this->dispatch('refresh-age')->self();
    }

    public function render()
    {
        return view('livewire.patient-details');
    }
}
