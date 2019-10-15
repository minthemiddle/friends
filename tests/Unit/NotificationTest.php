<?php

namespace Tests\Unit;

use App\Friend;
use App\Mail\UpcomingBirthdays;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Spatie\TestTime\TestTime;
use Tests\TestCase;

class NotificationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_only_sends_notification_mails_on_saturday_8_am()
    {
        factory(Friend::class, 3)->create([
            'birthdate' => '1985-12-12',
        ]);

        Mail::fake();

        TestTime::freeze(new Carbon('first saturday of December 2019 8am'));
        $this->artisan('schedule:run')->assertExitCode(0);
        Mail::assertSent(UpcomingBirthdays::class, function ($mail) {
          $this->assertTrue($mail->hasTo('kontakt@martinbetz.eu'), 'Unexpected to:');
          return true;
        });

        TestTime::addDays(3);
        $this->artisan('schedule:run')->assertExitCode(0);
        Mail::assertSent(UpcomingBirthdays::class);
    }
}
