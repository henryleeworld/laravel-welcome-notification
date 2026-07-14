<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Spatie\WelcomeNotification\WelcomeNotification as BaseWelcomeNotification;

class WelcomeNotification extends BaseWelcomeNotification
{
    protected function buildWelcomeNotificationMessage(): MailMessage
    {
        return (new MailMessage)
            ->subject(__('Welcome to ') . config('app.name'))
            ->action(__('Set initial password'), $this->showWelcomeFormUrl);
    }
}
