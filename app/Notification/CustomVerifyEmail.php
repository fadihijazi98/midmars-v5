<?php


namespace App\Notification;


use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CustomVerifyEmail
{
    public function __construct()
    {
        //mail-gun when deploy, free for 50000 email/month.
        $this->handel();
    }
    public function handel() {
        Mail::to('example@example.example')->send(new EmailVerification());
        return redirect('/home');
    }

}
