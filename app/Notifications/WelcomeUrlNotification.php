<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
// use Illuminate\Notifications\Notification;
use Spatie\WelcomeNotification\WelcomeNotification;

class WelcomeUrlNotification extends WelcomeNotification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function buildWelcomeNotificationMessage(): MailMessage
    {
        return (new MailMessage)
            ->subject(trans('frontend.welcome.notification.title'))
            ->action(trans('frontend.welcome.notification.content.set_initial_password'), $this->showWelcomeFormUrl);
    }
}
