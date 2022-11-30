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
            ->get(config('global.api_url') . '/category');

        return Inertia::render('Materials', [
            'categories' => $categories['body'],
            'subject' => request('subject'),
        ]);
    }
}
