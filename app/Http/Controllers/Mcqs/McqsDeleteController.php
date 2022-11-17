<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class McqsDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        Http::withToken(apiAccessToken())
            ->delete('http://13.230.182.156:3000/api/mcqs/delete/'.request('mcq'));

        return Redirect()
            ->back()
            ->with('success', "Mcq successfully deleted.");
    }
}
