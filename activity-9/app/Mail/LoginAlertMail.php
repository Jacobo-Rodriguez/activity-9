<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class LoginAlertMail extends Mailable
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('LOGIN ALERT, RED SPY IS IN THE BASE')
                    ->view('emails.login-alert');
    }
}