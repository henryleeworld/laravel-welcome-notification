<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;

class WelcomeNotification extends \Spatie\WelcomeNotification\WelcomeNotification
{
    public function buildWelcomeNotificationMessage(): MailMessage
    {
        return (new MailMessage)
            ->subject(__('Welcome to ') . config('app.name'))
            ->action(__('Set initial password'), $this->showWelcomeFormUrl);
    }
}
