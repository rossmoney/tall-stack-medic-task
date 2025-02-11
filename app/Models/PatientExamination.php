<?php

namespace App\Models;

use App\Enums\PatientExamination\Airway;
use App\Enums\PatientExamination\Breathing;
use App\Enums\PatientExamination\Circulation;
use App\Enums\PatientExamination\GCS\EyeResponse;
use App\Enums\PatientExamination\GCS\VerbalResponse;
use App\Enums\PatientExamination\GCS\MotorResponse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientExamination extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'airway' => Airway::class,
        'breathing' => Breathing::class,
        'circulation' => Circulation::class,
        'eye_response' => EyeResponse::class,
        'verbal_response' => VerbalResponse::class,
        'motor_response' => MotorResponse::class,
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function replaceGlasgowComaScale()
    {
        $eye = $this->eye_response->value ?? 1;
        $verbal = $this->verbal_response->value ?? 1;
        $motor = $this->motor_response->value ?? 1;

        $total = $eye + $verbal + $motor;
        $this->glasgow_coma_scale = 'GCS ' . $total . ', E' . $eye .
             ', V' . $verbal . 
             ', M' . $motor;

        $this->save();
        return $this->glasgow_coma_scale;
    }
}