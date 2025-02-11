<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use MedicOneSystems\MosUI\Livewire\Forms\AutosavingForm;

class PatientDetailsForm extends AutosavingForm
{
    #[Validate('nullable|string')]
    public $name;

    #[Validate('nullable|date')]
    public $dob;

    #[Validate('nullable|numeric|min:0')]
    public $age;

    #[Validate('nullable')]
    public $sex;

    #[Validate('nullable|numeric|min:0|max:999.9')]
    public $weight;

    #[Validate('nullable|string')]
    public $hpc;

    #[Validate('nullable|string')]
    public $pmh;
}
