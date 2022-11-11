<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class SubjectDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
    
        $categories = Http::withToken(apiAccessToken())->delete('http://13.230.182.156:3000/api/subjects/delete/' . request('subject'));

        if ($categories['success']) {
            return Redirect()
                ->back()
                ->with('success', "Subject successfully deleted");
        } else {
            return Redirect()
                ->back()
                ->with('success', "Subject delete failed");
        }
    }
}
