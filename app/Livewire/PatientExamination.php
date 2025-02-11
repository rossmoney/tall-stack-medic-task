<?php

namespace App\Livewire;

use App\Models\PatientExamination as PatientExaminationModel;
use Livewire\Component;
use App\Livewire\Forms\PatientExaminationForm;
use MedicOneSystems\MosUI\Traits\Autosaving;
use Illuminate\Support\Str;

class PatientExamination extends Component
{
    use Autosaving;

    public PatientExaminationForm $form;
    public $examinationId;

    public function mount(PatientExaminationModel $examination)
    {
        $this->examinationId = $examination->id;
        $this->form->init($examination);
    }

    public function render()
    {
        return view('livewire.patient-examination');
    }

    public function updated($propertyName)
    {
        if (preg_match("/form/", $propertyName))
        {
            $field = Str::replace('form.', '', $propertyName);
            if (preg_match("/eye_response|verbal_response|motor_response/", $field)) //only update when fields triggered that we need 
            {
                $model = PatientExaminationModel::find($this->examinationId);
                $model->{$field} = $this->form->{$field};
                $model->replaceGlasgowComaScale();
                $this->form->glasgow_coma_scale = $model->glasgow_coma_scale;
            }
        }
    }
}
