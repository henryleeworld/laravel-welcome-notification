<?php

namespace App\Http\Controllers;

use Spatie\WelcomeNotification\WelcomeController as BaseWelcomeController;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends BaseWelcomeController
{
    public function sendPasswordSavedResponse(): Response
    {
        return redirect()->route('dashboard');
    }
}
