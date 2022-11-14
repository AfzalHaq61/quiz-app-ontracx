<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Models\Mcq;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class McqsEditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Mcq $mcq)
    {
        $categories = Http::withToken(apiAccessToken())
            ->get('http://13.230.182.156:3000/api/category');

        return Inertia::render('Mcqs/McqsEdit', [
            'categories' => $categories['body'],
            'mcq' => $mcq,
        ]);
    }
}
