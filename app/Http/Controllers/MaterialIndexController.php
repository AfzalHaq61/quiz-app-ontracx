<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class MaterialIndexController extends Controller
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

        return Inertia::render('Materials', [
            'categories' => $categories['body'],
            'subject' => request('subject'),
        ]);
    }
}
