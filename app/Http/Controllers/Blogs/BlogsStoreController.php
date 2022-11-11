<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blogs\BlogsCreateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;

class BlogsStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BlogsCreateRequest $request)
    {
        $data = $request->validated();

        try {
            Blog::create([
                'subject_id' => request('subject'),
                'title' => $data['title'],
                'description' => $data['question'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('blogs.index')
            ->with('success', "Blog Successfully Added.");
    }
}
