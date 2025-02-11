<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Attributes\Computed;
use MedicOneSystems\MosDatatables\Column;
use MedicOneSystems\MosDatatables\Livewire\MosDatatable;

class BrowseJobsTable extends MosDatatable
{
    public $title = 'Browse Jobs';

    public $export = false;

    public function baseQuery()
    {
        return Job::query();
    }

    #[Computed]
    public function columns()
    {
        return collect([
            Column::make(
                title: 'Job ID',
                select: 'jobs.id',
                component: 'job-link',
            ),

            Column::make(
                title: 'Date',
                select: 'jobs.date'
            )->date(),

            Column::make(
                title: 'Location',
                select: 'jobs.location',
                searchable: true,
            ),
        ]);
    }
}
