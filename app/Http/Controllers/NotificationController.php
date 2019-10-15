<?php

namespace App\Http\Controllers;

use App\Friend;
use App\Mail\UpcomingBirthdays;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    public function __invoke()
    {
        Mail::to('kontakt@martinbetz.eu')->send(new UpcomingBirthdays($this->next()));
    }

    private function next()
    {
        return Friend::get()->whereBetween('time_delta_from_today', [0, 15]);
    }
}
