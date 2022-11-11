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
        if(request('category_id')) {
            $category_id = request('category_id');
        }
        else {
            $category_id = 1;
        }

        $categories = Http::withToken(apiAccessToken())->get('http://13.230.182.156:3000/api/category');
        $subjects = Http::withToken(apiAccessToken())->get('http://13.230.182.156:3000/api/subjects/category/'.$category_id);

        if (!$categories['error']) {

            return Inertia::render('Subjects/Subjects', [
                'categories' => $categories['body'],
                'subjects' => $subjects['body'],
            ]);
        }

        return Inertia::render('Subjects/Subjects');
    }
}
