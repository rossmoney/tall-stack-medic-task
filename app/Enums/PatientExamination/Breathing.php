<?php

namespace App\Enums\PatientExamination;

enum Breathing: string
{
    case GOOD_AE_BILATERALLY = 'good_ae_bilaterally';
    case POOR_AE_RIGHT = 'poor_ae_right';
    case POOR_AE_LEFT = 'poor_ae_left';
    case POOR_AE_BASES = 'poor_ae_bases';
    case APNOEIC = 'apnoeic';
    case VENTILATED = 'ventilated';

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ')->title();
    }
}
