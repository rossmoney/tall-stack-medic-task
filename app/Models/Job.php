<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Job extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function getDispatchDurationAttribute()
    {
        return Carbon::parse($this->time_999)->diffInMinutes(Carbon::parse($this->time_hems));
    }

    public function getLaunchDurationAttribute()
    {
        return Carbon::parse($this->time_hems)->diffInMinutes(Carbon::parse($this->time_lift));
    }

    public function getSceneDurationAttribute()
    {
        return Carbon::parse($this->time_scene)->diffInMinutes(Carbon::parse($this->time_depart));
    }

    public function getTransitDurationAttribute()
    {
        return Carbon::parse($this->time_depart)->diffInMinutes(Carbon::parse($this->time_hospital));
    }
}
