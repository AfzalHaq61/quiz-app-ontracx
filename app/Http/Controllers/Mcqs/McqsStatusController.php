<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class McqsStatusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $response = Http::withToken(apiAccessToken())
            ->put(config('global.api_url') . '/mcqs/draft/' . request('mcq'));

        return Redirect::route('mcqs.index')
            ->with('success', "Mcq Status successfully updated.");
    }
}
