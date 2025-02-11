<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;

class AddJobModal extends Component
{
    public bool $modalOpen = false;

    public string $category = '';

    public string $location = '';

    public string $time_999 = '';

    protected array $rules = [
        'category' => 'required|string',
        'location' => 'required|string',
        'time_999' => 'required|date_format:H:i',
    ];

    public function submit()
    {
        $this->validate();

        Job::create([
            'category' => $this->category,
            'location' => $this->location,
            'time_999' => $this->time_999,
            'date' => now()->format('Y-m-d'),
        ]);

        $this->resetForm();
        $this->closeModal();

        return redirect()->route('home');
    }

    public function cancel(): void
    {
        $this->resetForm();
        $this->closeModal();
    }

    protected function resetForm(): void
    {
        $this->category = '';
        $this->location = '';
        $this->time_999 = '';
    }

    protected function closeModal(): void
    {
        $this->modalOpen = false;
    }

    public function render()
    {
        return view('livewire.add-job-modal');
    }
}
