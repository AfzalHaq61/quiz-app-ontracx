<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogsDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Blog $blog)
    {
        $blog->delete();

        return Redirect()
            ->back()
            ->with('success', "Blog successfully deleted.");
    }
}
