<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Models\Mcq;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class McqsController extends Controller
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

        return Inertia::render('Mcqs/McqsAdminPanel', [
            'categories' => $categories['body'],
        ]);
    }
}
