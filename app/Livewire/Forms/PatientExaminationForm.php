<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use MedicOneSystems\MosUI\Livewire\Forms\AutosavingForm;

class PatientExaminationForm extends AutosavingForm
{
    #[Validate('nullable|string')]
    public $airway;

    #[Validate('nullable|string')]
    public $breathing;

    #[Validate('nullable|string')]
    public $circulation;

    #[Validate('nullable|integer')]
    public $eye_response;

    #[Validate('nullable|integer')]
    public $verbal_response;

    #[Validate('nullable|integer')]
    public $motor_response;

    #[Validate('nullable|string')]
    public $glasgow_coma_scale;

    #[Validate('nullable')]
    public $entrapment;

    #[Validate('nullable|string')]
    public $secondary_survey;
}
