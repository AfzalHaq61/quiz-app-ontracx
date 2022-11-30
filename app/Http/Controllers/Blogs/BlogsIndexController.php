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
            ->get(config('global.api_url') . '/category');

        $blogs = Http::withToken(apiAccessToken())
            ->get(config('global.api_url') . '/blogs/subject/' . request('subject'));

        if ($categories['success']) {

            return Inertia::render('Blogs/Blogs', [
                'blogs' => $blogs['body'],
                'categories' => $categories['body'],
                'subject' => request('subject')
            ]);
        } else {
            return $categories['error'];
        }
    }
}
