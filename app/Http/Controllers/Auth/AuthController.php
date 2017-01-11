<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\User;
use App\Social;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $social = Social::where('social_id', $user->id)->first();
        if ($social) {
        	$u = User::where('email', $user->email)->first();
        	Auth::login($u);
        	return redirect()->to('/home');
        } else {
        	$createdUser_social = Social::Create([
                'name' => $user->getName(),
                'nickname' => $user->getNickname(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
                'social_id' => $user->getId(),
                'token' => $user->token
        	]);
        	$createdUser = User::Create([
        		'name' => $user->getName(),
        		'email' => $user->getEmail(),
                'password' => bcrypt('12345678'),
                'remember_token' => $user->token
        		]);
        	Auth::login($createdUser);
        	return redirect()->to('/page');
        }
    }

    public function redirectgoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackgoogle()
    {
        $user =  Socialite::driver('google')->user();
        $social = Social::where('social_id', $user->id)->first();
        if ($social) {
            $u = User::where('email', $user->email)->first();
            Auth::login($u);
            return redirect()->to('/home');
        } else {
            $createdUser_social = Social::Create([
                'name' => $user->getName(),
                'nickname' => $user->getNickname(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
                'social_id' => $user->getId(),
                'token' => $user->token
            ]);
            $createdUser = User::Create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt('12345678'),
                'remember_token' => $user->token
                ]);
            Auth::login($createdUser);
            return redirect()->to('/page');
        }
    }
}
