<?php

namespace Vanguard\Listeners\Login;

use Illuminate\Auth\Events\Login;
use Mail;
use Session;
use Vanguard\Repositories\User\UserRepository;

class SendEmailVerificationCode
{
    /**
     * @var UserRepository
     */
    private $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        if (!setting('2fa.enabled') || Session::get('user.2fa.success')==1)
            return;
        \Log::debug('2fa sending');
        $number= rand(100000, 999999);
        Session::put('user.2fa.code', $number);
        Mail::to($event->user->email)->send(new \Vanguard\Mail\FACode($number));
    }
}
