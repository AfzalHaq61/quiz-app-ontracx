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

        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NCwiaWF0IjoxNjY3ODg5ODc4LCJleHAiOjE2Njc5NzYyNzh9.Fe_F6jAPhxH4Vh15s0vLEtVCku_o-ityX1e_r4kq5Zs';
        $categories = Http::withToken($token)->get('http://13.230.182.156:3000/api/category');
        $subjects = Http::withToken($token)->get('http://13.230.182.156:3000/api/subjects/category/'.$category_id);

        if (!$categories['error']) {

            return Inertia::render('Subjects/Subjects', [
                'categories' => $categories['body'],
                'subjects' => $subjects['body'],
            ]);
        }

        return Inertia::render('Subjects/Subjects');
    }
}
