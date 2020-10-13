<?php

namespace App\Http\Controllers\Auth;

use Spatie\WelcomeNotification\WelcomeController as BaseWelcomeController;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use App\Models\User;

class WelcomeController extends BaseWelcomeController
{
    public function sendNotification($user)
    {
        $expiresAt = Carbon::now()->addDay();
        $user = User::find($user);
        $user->sendWelcomeNotification($expiresAt);
    }

    public function sendPasswordSavedResponse(): Response
    {
        return redirect()->route('home');
    }
}