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
            ->get('http://13.230.182.156:3000/api/category');

        $blog = Http::withToken(apiAccessToken())
            ->get('http://13.230.182.156:3000/api/blogs/one/' . request('blog'));

        return Inertia::render('Blogs/BlogsEdit', [
            'categories' => $categories['body'],
            'blog' => $blog['body']
        ]);
    }
}
