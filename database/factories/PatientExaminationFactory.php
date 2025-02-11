<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\PatientExamination;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientExaminationFactory extends Factory
{
    protected $model = PatientExamination::class;

    public function definition()
    {
        $airways = \App\Enums\PatientExamination\Airway::cases();
        $breathing = \App\Enums\PatientExamination\Breathing::cases();
        $circulation = \App\Enums\PatientExamination\Circulation::cases();

        return [
            'patient_id' => Patient::inRandomOrder()->value('id'),
            'airway' => $this->faker->randomElement($airways),
            'breathing' => $this->faker->randomElement($breathing),
            'circulation' => $this->faker->randomElement($circulation),
            'eye_response' => $this->faker->randomElement([1, 2, 3, 4]),
            'verbal_response' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'motor_response' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
            'entrapment' => $this->faker->randomElement([0, 1]),
            'secondary_survey' => $this->faker->sentences(4, true),
        ];
    }
}
