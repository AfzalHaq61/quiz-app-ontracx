<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class BlogsIndexController extends Controller
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

        return Inertia::render('Blogs/BlogsAdminPanel', [
            'blogs' => Blog::all(),
            'categories' => $categories['body'],
        ]);
    }
}
