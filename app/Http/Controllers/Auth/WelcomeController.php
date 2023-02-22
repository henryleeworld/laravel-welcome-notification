<?php

namespace App\Http\Controllers\Auth;

use Symfony\Component\HttpFoundation\Response;
use Spatie\WelcomeNotification\WelcomeController as BaseWelcomeController;

class WelcomeController extends BaseWelcomeController
{
    public function sendPasswordSavedResponse(): Response
    {
        return redirect()->route('dashboard');
    }

    /*
    public function rules()
    {
        return [
            'password' => 'required|confirmed|min:6',
        ];
    }
    */
}
