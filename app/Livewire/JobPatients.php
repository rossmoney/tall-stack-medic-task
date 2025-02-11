<?php

namespace App\Livewire;

use App\Models\Job;
use App\Models\Patient;
use Livewire\Component;

class JobPatients extends Component
{
    public Job $job;

    public function create()
    {
        $patient = $this->job->patients()->create();

        return redirect()->route('patient.edit', $patient->id);
    }

    public function delete($patientId)
    {
        Patient::destroy($patientId);
        $this->job->refresh();
    }
}
