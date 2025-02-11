<?php

namespace App\Enums\PatientExamination\GCS;

enum EyeResponse: int
{
    case NO_RESPONSE = 1;
    case TO_PAIN = 2;
    case TO_VOICE = 3;
    case SPONTANEOUS = 4;

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ')->title();
    }
}
