<?php

namespace Tests\Unit;

use App\Friend;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class FriendsUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function current_age_on_birthdate_is_correct()
    {
        $friend = factory(Friend::class)->create([
            'birthdate' => '1990-01-01',
        ]);

        $this->setNow(2000,01,01);
        $this->assertEquals(10, $friend->age);
    }

    /** @test */
    function age_10_and_2_days_before_birthdate_shows_coming_age()
    {
        $friend = factory(Friend::class)->make([
            'birthdate' => '1990-01-11',
        ]);

        $this->setNow(2000, 1, 1);
        $this->assertEquals(10, $friend->age);

        $this->setNow(2000, 1, 9);
        $this->assertEquals(10, $friend->age);
    }

    function setNow($year, $month, $day)
    {
        $newNow = Carbon::create($year, $month, $day)->startOfDay();
        Carbon::setTestNow($newNow);
        return $this;
    }
}
