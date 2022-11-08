<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class SubjectEditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NCwiaWF0IjoxNjY3ODg5ODc4LCJleHAiOjE2Njc5NzYyNzh9.Fe_F6jAPhxH4Vh15s0vLEtVCku_o-ityX1e_r4kq5Zs';
        $subjects = Http::withToken($token)->get('http://13.230.182.156:3000/api/subjects/getSpecificSub/'.request('subject'));

        if ($subjects['success']) {

            return Inertia::render('Subjects/SubjectsEdit', [
                'subjects' => $subjects['body'],
            ]);
        }
    }
}
