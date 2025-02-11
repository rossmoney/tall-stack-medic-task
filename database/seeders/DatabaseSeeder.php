<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Patient;
use App\Models\PatientExamination;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Job::factory()->order(50)->create();
        $jobs = Job::all();

        foreach ($jobs as $job) {
            $numPatients = rand(1, 2);
            $job->patients()->saveMany(Patient::factory()->count($numPatients)->make());
        }

        $patients = Patient::all();
        foreach($patients as $patient) {
            $patient->examination()->save(PatientExamination::factory()->create());
        }
    }
}
