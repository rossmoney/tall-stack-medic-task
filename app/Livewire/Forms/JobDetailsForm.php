<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use MedicOneSystems\MosUI\Livewire\Forms\AutosavingForm;

class JobDetailsForm extends AutosavingForm
{
    #[Validate('nullable|string')]
    public $category;

    #[Validate('nullable|string')]
    public $location;

    #[Validate('nullable|string')]
    public $ops_text;
}
