<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;
use App\Livewire\Forms\JobDetailsForm;
use MedicOneSystems\MosUI\Traits\Autosaving;

class JobDetails extends Component
{
    use Autosaving;

    public JobDetailsForm $form;

    public function mount(Job $job)
    {
        $this->form->init($job);
    }

    public function render()
    {
        return view('livewire.job-details');
    }
}
