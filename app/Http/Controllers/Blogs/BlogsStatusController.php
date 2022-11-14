<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;

class BlogsStatusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Blog $blog)
    {
        $blog->status = 1;

        $blog->save();

        return Redirect::route('blogs.index')
            ->with('success', "Blog Status successfully updated.");
    }
}
