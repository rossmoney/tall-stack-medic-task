<?php

namespace App\Enums\PatientExamination\GCS;

enum MotorResponse: int
{
    case NO_MOVEMENT = 1;
    case EXTENSOR_POSTURING = 2;
    case FLEXOR_POSTURING = 3;
    case FLEXION = 4;
    case LOCALIZES_PAIN = 5;
    case OBEYS_COMMANDS = 6;

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ')->title();
    }
}
