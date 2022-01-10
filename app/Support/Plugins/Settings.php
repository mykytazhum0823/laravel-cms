<?php

namespace Vanguard\Support\Plugins;

use Vanguard\Plugins\Plugin;
use Vanguard\Support\Sidebar\Item;
use Vanguard\User;

class Settings extends Plugin
{
    public function sidebar()
    {
        $general = Item::create(__('General'))
            ->route('settings.general')
            ->active("settings")
            ->permissions('settings.general');

        $authAndRegistration = Item::create(__('Auth & Registration'))
            ->route('settings.auth')
            ->active("settings/auth")
            ->permissions('settings.auth');

        $notifications = Item::create(__('Notifications'))
            ->route('settings.notifications')
            ->active("settings/notifications")
            ->permissions(function (User $user) {
                return $user->hasPermission('settings.notifications');
            });
       
        $reviews = Item::create(__('Reviews'))
            ->route('settings.reviews')
            ->active("settings/reviews");

        $email_template = Item::create(__('Email Templates'))
            ->route('settings.email')
            ->active("settings/email");

        $smtp = Item::create(__('SMTP'))
            ->route('settings.smtp')
            ->active("settings/smtp");

        return Item::create(__('Settings'))
            ->href('#settings-dropdown')
            ->icon('fas fa-cogs')
            ->permissions(['settings.general', 'settings.auth', 'settings.notifications'])
            ->addChildren([
                $general,
                $authAndRegistration,
                $notifications,
                $smtp,
                $reviews,
                $email_template
            ]);
    }
}
