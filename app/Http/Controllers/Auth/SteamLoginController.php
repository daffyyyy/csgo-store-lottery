<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use kanalumaddela\LaravelSteamLogin\SteamUser;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\AbstractSteamLoginController;


class SteamLoginController extends AbstractSteamLoginController
{
    public function authenticated(Request $request, SteamUser $steamUser)
    {
        
        $steamUser = $steamUser->getUserInfo();
        Auth::login(User::updateOrCreate([
            'account_id' => $steamUser->accountId,
            'steam_id' => $steamUser->steamId2,
            'name' => $steamUser->name,
            'account_url' => $steamUser->accountUrl,
            'avatar_url' => $steamUser->avatar,
        ]), true);
    }

}
