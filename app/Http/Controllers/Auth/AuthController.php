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
        //dd($user);
        //$token = $user->token;
        $social = Social::where('social_id', $user->id)->first();
        if ($social) {
        	$u = User::where('email', $user->email)->first();
        	Auth::login($u);
        	return redirect('page');
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
        		]);
        	Auth::login($createdUser_social);
        	return redirect('page');
        }
    }
}
