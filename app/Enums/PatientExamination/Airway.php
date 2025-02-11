<?php

namespace App\Enums\PatientExamination;

enum Airway: string
{
    case MAINTAINING_OWN = 'maintaining_own';
    case PARTIAL_OBSTRUCTION = 'partial_obstruction';
    case COMPLETE_OBSTRUCTION = 'complete_obstruction';
    case MANAGED = 'managed';

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ')->title();
    }
}
