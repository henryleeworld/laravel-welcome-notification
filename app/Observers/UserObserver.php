<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $expiresAt = now()->addDay();
        $user->sendWelcomeNotification($expiresAt);
    }
}
