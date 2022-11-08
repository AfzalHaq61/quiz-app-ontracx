<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

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
            $response = Http::post('http://13.230.182.156:3000/api/auth/signin', [
                'email' => $data['email'],
                'password' => $data['password'],
            ]);

            if ($response['error']) {
                return Redirect()->back()
                    ->with('errors', "Invalid Credentials.");
            } else {
                return Redirect::route('landingPage')
                    ->with('success', "User Successfully Login.");
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
