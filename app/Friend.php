<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $dates = ['birthdate'];

    public function getAgeAttribute()
    {
        $time_delta_relative = $this->bday()->dayOfYear - Carbon::today()->dayOfYear;

        if ($time_delta_relative == 0) {
            return $this->bday()->age;
        } else {
            return $this->bday()->age + 1;
        }

    }

    public function getDayOfYearAttribute()
    {
        $day = $this->bday()->dayOfYear;
        return $day;
    }

    public function getTimeDeltaFromTodayAttribute()
    {
        $bday_day_of_year = $this->bday()->dayOfYear;
        $today_day_of_year = Carbon::today()->dayOfYear;

        $time_delta_relative = $bday_day_of_year - $today_day_of_year; // positive

        if ($time_delta_relative >= 0) {
            return $time_delta_relative;
        } else {
            return 365 - $today_day_of_year + $bday_day_of_year;
        }

    }

    public function bday() {
        return Carbon::instance($this->birthdate);
    }
}
