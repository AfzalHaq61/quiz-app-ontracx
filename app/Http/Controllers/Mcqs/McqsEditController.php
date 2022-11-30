<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class McqsEditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $categories = Http::withToken(apiAccessToken())
            ->get(config('global.api_url') . '/category');

        $mcq = Http::withToken(apiAccessToken())
            ->get(config('global.api_url') . '/mcqs/one/'.request('mcq'));

        return Inertia::render('Mcqs/McqsEdit', [
            'categories' => $categories['body'],
            'mcq' => $mcq['body']
        ]);  
    }
}
