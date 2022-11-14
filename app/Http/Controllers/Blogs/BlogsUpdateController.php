<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blogs\BlogsCreateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogsUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Blog $blog, BlogsCreateRequest $request)
    {
        $blog->subject_id = $request->subject_id;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->status = $request->status;

        $blog->save();

        return Redirect::route('blogs.index')
            ->with('success', "Blog successfully updated.");
    }
}
