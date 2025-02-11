<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Patient;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        $dob = $this->faker->dateTimeBetween('-80 years', '-18 years');

        $age = Carbon::instance($dob)->diffInDays(now()) / 365.25;
        $age = number_format($age, 4, '.', '');

        $paragraphs = collect(range(1, 3))->map(function () {
            return $this->faker->paragraph(5, false);
        })->implode("\n\n");

        return [
            'job_id' => Job::inRandomOrder()->value('id'),
            'name' => $this->faker->name,
            'dob' => Carbon::instance($dob)->format('Y-m-d'),
            'age' => $age,
            'sex' => $this->faker->randomElement([0, 1]),
            'weight' => $this->faker->randomFloat(1, 50, 120),
            'hpc' => $paragraphs,
            'pmh' => $this->faker->sentences(4, true),
        ];
    }
}
