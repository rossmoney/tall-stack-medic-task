<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use MedicOneSystems\MosUI\Livewire\Forms\AutosavingForm;

class JobTimingsForm extends AutosavingForm
{
    #[Validate('nullable|date_format:H:i')]
    public $time_999;

    #[Validate('nullable|date_format:H:i')]
    public $time_hems;

    #[Validate('nullable|date_format:H:i')]
    public $time_lift;

    #[Validate('nullable|date_format:H:i')]
    public $time_land_scene;

    #[Validate('nullable|date_format:H:i')]
    public $time_scene;

    #[Validate('nullable|date_format:H:i')]
    public $time_depart;

    #[Validate('nullable|date_format:H:i')]
    public $time_land_hospital;

    #[Validate('nullable|date_format:H:i')]
    public $time_hospital;
}
