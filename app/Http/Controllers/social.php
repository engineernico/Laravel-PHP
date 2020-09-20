<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;

class social extends Controller
{
    public function redirect($service)
    {

        return Socialite::driver($service)->redirect();

    }

    public function callback($service)
    {

        return $user = Socialite::driver($service)->user();


    }
}
