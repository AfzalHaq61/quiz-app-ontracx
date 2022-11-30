<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BlogsDraftController extends Controller
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
            ->put(config('global.api_url') . '/blogs/draft/'.request('blog'));

        return Redirect()
            ->back()
            ->with('success', "Blog successfully added to Draft.");
    }
}
