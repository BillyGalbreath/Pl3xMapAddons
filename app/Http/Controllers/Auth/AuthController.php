<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller {
    /**
     * Redirect to GitHub for authentication.
     *
     * @return RedirectResponse
     */
    public function redirect(): RedirectResponse {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Handle GitHub's callback then redirect to dashboard.
     *
     * @return RedirectResponse
     */
    public function callback(): RedirectResponse {
        $github = Socialite::driver('github')->user();
        $user = User::updateOrCreate([
            'github_id' => $github->id
        ], [
            'username' => $github->nickname,
            'realname' => $github->name,
            'email' => $github->email,
            'github_id' => $github->id,
            'github_avatar' => $github->avatar,
            'github_token' => $github->token,
            'github_refresh_token' => $github->refreshToken
        ]);
        Auth::login($user);
        return to_route('dashboard');
    }

    /**
     * Log user out then redirect to home.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('index');
    }
}
