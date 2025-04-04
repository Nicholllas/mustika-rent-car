<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
{
    try {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id', $user->id)->first();

        if ($finduser) {
            Auth::login($finduser);
            return redirect()->route('front.index');
        } else {
            $newUser = User::updateOrCreate(
                ['email' => $user->email],
                [
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'phone' => $user->user['phoneNumber'] ?? null, // Tambahkan ini
                    'password' => encrypt('123456dummy')
                ]
            );

            Auth::login($newUser);

            return redirect()->route('front.index');
        }
    } catch (Exception $e) {
        return redirect()->route('login')->with('error', 'Terjadi kesalahan saat login dengan Google.');
    }
}
}
