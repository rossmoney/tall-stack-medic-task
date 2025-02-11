<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    protected static ?Carbon $startTime = null;

    protected static float $step = 0;

    protected static int $currentIndex = 0;

    /**
     * Call this method before creation to specify the number of models
     * so that their dates will be evenly spaced between 2 months ago and now.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function order(int $count)
    {
        static::$startTime = Carbon::now()->subMonths(2);

        $endTime = Carbon::now();
        $durationInMinutes = static::$startTime->diffInMinutes($endTime);

        static::$step = ($count > 1) ? $durationInMinutes / ($count - 1) : 0;

        static::$currentIndex = 0;

        return $this->count($count);
    }

    public function definition(): array
    {
        // If startTime is not set (e.g. if order() wasn't called), default to a random datetime between -2 months and now.
        if (static::$startTime === null) {
            static::$startTime = Carbon::instance($this->faker->dateTimeBetween('-2 months', 'now'));
            static::$step = 0;
            static::$currentIndex = 0;
        }

        $baseDate = static::$startTime->copy()->addMinutes(static::$step * static::$currentIndex);
        static::$currentIndex++;

        $time999 = $baseDate->copy();
        $timeHems = $time999->copy()->addMinutes($this->faker->numberBetween(2, 10));
        $timeLift = $timeHems->copy()->addMinutes($this->randomOffset(1, 6, 0.8, 4));
        $timeLandScene = $timeLift->copy()->addMinutes($this->faker->numberBetween(10, 30));
        $timeScene = $timeLandScene->copy()->addMinutes($this->faker->numberBetween(2, 12));
        $timeDepart = $timeScene->copy()->addMinutes($this->randomOffset(5, 90, 0.7, 45));
        $timeLandHospital = $timeDepart->copy()->addMinutes($this->faker->numberBetween(10, 20));
        $timeHospital = $timeLandHospital->copy()->addMinutes($this->faker->numberBetween(3, 10));

        $categories = \App\Enums\JobCategory::cases();

        $paragraphs = collect(range(1, 3))->map(function () {
            return $this->faker->paragraph(5, false);
        })->implode("\n\n");

        return [
            'date' => $baseDate->format('Y-m-d'),
            'category' => $this->faker->randomElement($categories),
            'location' => $this->faker->address(),
            'ops_text' => $paragraphs,
            'time_999' => $time999->format('H:i'),
            'time_hems' => $timeHems->format('H:i'),
            'time_lift' => $timeLift->format('H:i'),
            'time_land_scene' => $timeLandScene->format('H:i'),
            'time_scene' => $timeScene->format('H:i'),
            'time_depart' => $timeDepart->format('H:i'),
            'time_land_hospital' => $timeLandHospital->format('H:i'),
            'time_hospital' => $timeHospital->format('H:i'),
        ];
    }

    /**
     * Helper to choose a random minute offset with a probability distribution.
     *
     * @param  int  $min  Minimum number of minutes.
     * @param  int  $max  Maximum number of minutes.
     * @param  float|null  $probability  Probability (0-1) that the offset is in the "preferred" range.
     * @param  int|null  $preferredMax  Upper bound of the "preferred" range.
     */
    private function randomOffset(int $min, int $max, ?float $probability = null, ?int $preferredMax = null): int
    {
        if (is_null($probability) || is_null($preferredMax)) {
            return $this->faker->numberBetween($min, $max);
        }

        $randomFloat = $this->faker->randomFloat(2, 0, 1);
        if ($randomFloat < $probability) {
            return $this->faker->numberBetween($min, $preferredMax);
        } else {
            return $this->faker->numberBetween($preferredMax + 1, $max);
        }
    }
}
