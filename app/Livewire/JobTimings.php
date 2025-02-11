<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;
use App\Livewire\Forms\JobTimingsForm;
use MedicOneSystems\MosUI\Traits\Autosaving;

class JobTimings extends Component
{
    use Autosaving;

    public JobTimingsForm $form;

    public function mount(Job $job)
    {
        $this->form->init($job);
    }

    public function render()
    {
        return view('livewire.job-timings');
    }
}
