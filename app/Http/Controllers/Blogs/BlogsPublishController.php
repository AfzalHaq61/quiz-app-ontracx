<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BlogsPublishController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        Http::withToken(apiAccessToken())
            ->put('http://13.230.182.156:3000/api/blogs/publish/'.request('blog'));

        return Redirect()
            ->back()
            ->with('success', "Blog successfully published.");
    }
}
