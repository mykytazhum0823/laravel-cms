<?php

namespace Vanguard\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Vanguard\Events\User\Banned;
use Vanguard\Events\User\LoggedIn;
use Illuminate\Auth\Events\Login;
use Vanguard\Listeners\Users\ActivateUser;
use Vanguard\Listeners\Users\InvalidateSessions;
use Vanguard\Listeners\Login\UpdateLastLoginTimestamp;
use Vanguard\Listeners\Registration\SendSignUpNotification;
use Vanguard\Listeners\Login\SendEmailVerificationCode;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendSignUpNotification::class,
        ],
        LoggedIn::class => [
            UpdateLastLoginTimestamp::class
        ],
        Banned::class => [
            InvalidateSessions::class
        ],
        Verified::class => [
            ActivateUser::class
        ],
        Login::class => [
            SendEmailVerificationCode::class
        ],
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        //
    ];

    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
