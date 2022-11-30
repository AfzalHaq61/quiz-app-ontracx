<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Http;

class SubjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if (request('category_id')) {
            $category_id = request('category_id');
        } else {
            $category_id = 1;
        }

        $categories = Http::withToken(apiAccessToken())->get(config('global.api_url') . '/category');
        $subjects = Http::withToken(apiAccessToken())->get(config('global.api_url') . '/subjects/category/' . $category_id);

        if (!$categories['error']) {

            return Inertia::render('Subjects/Subjects', [
                'categories' => $categories['body'],
                'subjects' => $subjects['body'],
            ]);
        } else {
            return Inertia::render('Subjects/Subjects');
        }
    }
}
