<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $dates = ['birthday'];


    public function getAgeAttribute(){
    	$my_age = Carbon::instance($this->birthday);
    	return $my_age->age+1;
    }

    public function getDayOfYearAttribute(){
    	$day = Carbon::instance($this->birthday)->dayOfYear;
    	return $day;
    }

    public function getTimeDeltaFromTodayAttribute(){
    	$bday_day_of_year = Carbon::instance($this->birthday)->dayOfYear;
    	$today_day_of_year = Carbon::today()->dayOfYear;

    	$time_delta_relative = $bday_day_of_year - $today_day_of_year; // positive

    	if ($time_delta_relative >= 0) {
    		return $time_delta_relative;
    	}

    	else {
    		return 365 - $today_day_of_year + $bday_day_of_year;
    	}

    }
}
