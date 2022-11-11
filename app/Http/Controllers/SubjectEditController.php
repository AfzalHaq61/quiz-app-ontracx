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
        
        $subjects = Http::withToken(apiAccessToken())->get('http://13.230.182.156:3000/api/subjects/getSpecificSub/'.request('subject'));

        if ($subjects['success']) {

            return Inertia::render('Subjects/SubjectsEdit', [
                'subjects' => $subjects['body'],
            ]);
        }
    }
}
