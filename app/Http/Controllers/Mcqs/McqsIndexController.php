<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class McqsIndexController extends Controller
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

        $mcqs = Http::withToken(apiAccessToken())
            ->get(config('global.api_url') . '/mcqs/subject/'.request('subject'));

        if ($categories['success']) {

            return Inertia::render('Mcqs/Mcqs', [
                'mcqs' => $mcqs['body'],
                'categories' => $categories['body'],
                'subject' => request('subject')
            ]);
        } else {
            return $categories['error'];
        }
    }
}
