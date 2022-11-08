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
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NCwiaWF0IjoxNjY3NjI5OTY2LCJleHAiOjE2Njc3MTYzNjZ9.X2v5cyt305HBs7JqzcoVJvHCz829sv8L7lVW4IygS6E';
        $categories = Http::withToken($token)->get('http://13.230.182.156:3000/api/category');
        $subjects = Http::withToken($token)->get('http://13.230.182.156:3000/api/subjects');

        if (!$categories['error']) {

            return Inertia::render('Subjects/Subjects', [
                'categories' => $categories['body'],
                'subjects' => $subjects['body'],
            ]);
        }

        return Inertia::render('Subjects/Subjects');
    }
}
