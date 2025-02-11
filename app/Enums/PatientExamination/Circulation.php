<?php

namespace App\Enums\PatientExamination;

enum Circulation: string
{
    case RADIAL_PULSE = 'radial_pulse';
    case FEMORAL_PULSE = 'femoral_pulse';
    case CAROTID_PULSE = 'carotid_pulse';
    case CARDIAC_ARREST = 'cardiac_arrest';

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ')->title();
    }
}
