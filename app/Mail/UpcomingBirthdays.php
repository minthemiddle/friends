<?php

namespace App\Mail;

use App\Friend;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UpcomingBirthdays extends Mailable
{
    use Queueable, SerializesModels;

    protected $friends;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($friends)
    {
        $this->friends = $friends;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.upcomingbirthdays')
        ->with(['friends' => $this->friends]);
    }
}
