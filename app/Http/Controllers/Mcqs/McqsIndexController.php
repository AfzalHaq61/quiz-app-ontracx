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
            ->get('http://13.230.182.156:3000/api/category');

        $mcqs = Http::withToken(apiAccessToken())
            ->get('http://13.230.182.156:3000/api/mcqs/subject/'.request('subject'));

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
