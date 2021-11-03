<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OauthController
{
    public function index()
    {
        $parameters = [
            'client_id' => config('oauth.autodesk.client_id'),
            'response_type' => 'code',
            'redirect_uri' => config('oauth.autodesk.call_back'),
            'scope' => 'data:read'
        ];

        $url = 'https://developer.api.autodesk.com/authentication/v1/authorize' . http_build_query($parameters);
        dd($url);
    }

    public function callback(Request $request)
    {
        $parameters = [
            'client_id' => config('oauth.autodesk.client_id'),
            'client_secret' => config('oauth.autodesk.secret_key'),
            'grant_type' => 'authorization_code',
            'code' => $request->get('code'),
            'redirect_uri' => config('oauth.autodesk.call_back')
        ];

        $response = Http::asForm()->post('https://developer.api.autodesk.com/authentication/v1/gettoken', $parameters);
        $token = $response->json('access_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token
        ])->get('https://developer.api.autodesk.com/userprofile/v1/users/@me');

        $user = User::updateOrCreate([
            'username' => $response->json('userName'),
            'email' => $response->json('emailId'),
            'password' => Hash::make(Str::random(10))
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }
}
