<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\TryCatch;

class LoginStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        $data = $request->validated();

        try {
            $response = Http::post(config('global.api_url') . '/auth/signin', [
                'email' => $data['email'],
                'password' => $data['password'],
            ]);

            // return apiAccessToken();

            // config('global.access_token', $response['accessToken']);

            // return config('global.access_token');

            if ($response['error']) {
                return Redirect()->back()
                    ->with('error', $response['error']);
            } else {
                return Redirect::route('subjects.index')
                    ->with('success', "User successfully login.");
            }
        } catch (\Exception $e) {
            return Redirect()->back()
                ->with('error', "Api connection problem");
        }
    }
}
