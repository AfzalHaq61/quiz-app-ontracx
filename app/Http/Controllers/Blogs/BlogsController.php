<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class BlogsController extends Controller
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

        return Inertia::render('Blogs/Blogs', [
            'categories' => $categories['body'],
            'subject' => request('subject')
        ]);
    }
}
