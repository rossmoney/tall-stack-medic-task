<?php

namespace Tests\Browser;

use App\Models\Patient;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PatientExaminationTest extends DuskTestCase
{
    public function testCheckPatientExaminationPanelLoads(): void
    {
        $patient = Patient::find(1);

        $this->browse(function (Browser $browser) use ($patient) {
            $browser->visit(route("patient.edit", $patient))
                    ->assertSee('PATIENT EXAMINATION');
        });
    }
}
