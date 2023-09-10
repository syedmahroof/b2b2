<?php

namespace App\Http\Controllers\BuyerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        // Add your logic here to create or authenticate the user based on $user data.

        // After authentication, you can redirect the user to their dashboard or any other page.
    }
}
