<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class BlogsEditController extends Controller
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

        $blog = Http::withToken(apiAccessToken())
            ->get(config('global.api_url') . '/blogs/one/' . request('blog'));

        return Inertia::render('Blogs/BlogsEdit', [
            'categories' => $categories['body'],
            'blog' => $blog['body']
        ]);
    }
}
