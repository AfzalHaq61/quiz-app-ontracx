<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubjectDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NCwiaWF0IjoxNjY3NjI5OTY2LCJleHAiOjE2Njc3MTYzNjZ9.X2v5cyt305HBs7JqzcoVJvHCz829sv8L7lVW4IygS6E';
        $categories = Http::withToken($token)->delete('http://13.230.182.156:3000/api/subjects/delete');
    }
}
