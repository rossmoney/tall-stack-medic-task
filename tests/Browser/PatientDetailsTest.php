<?php

namespace Tests\Browser;

use App\Models\Patient;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PatientDetailsTest extends DuskTestCase
{
    public function testCheckPatientDetailsPanelLoads(): void
    {
        $patient = Patient::find(1);

        $this->browse(function (Browser $browser) use ($patient) {
            $browser->visit(route("patient.edit", $patient))
                    ->assertSee('PATIENT DETAILS');
        });
    }
}
