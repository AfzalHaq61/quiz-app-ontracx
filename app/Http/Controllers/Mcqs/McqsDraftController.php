<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class McqsDraftController extends Controller
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
            ->put(config('global.api_url') . '/mcqs/draft/'.request('mcq'));

        return Redirect()
            ->back()
            ->with('success', "Mcq successfully added to Draft.");
    }
}
