<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blogs\BlogsCreateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class BlogsUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BlogsCreateRequest $request)
    {

        $image = $request->file('image');

        // post request with attachment
        $imageResponse = Http::withToken(apiAccessToken())
            ->attach('file', file_get_contents($image), $image->getClientOriginalName())
            ->post('http://13.230.182.156:3000/api/upload/image');

        $imageUrl =  $imageResponse['url'];

        $response = Http::withToken(apiAccessToken())
            ->put('http://13.230.182.156:3000/api/blogs/update/' . request('blog'), [
                'title' => $request['title'],
                'reference' => $request['reference'],
                'cover_image' => $imageUrl,
                'description' => $request['description'],
            ]);

        if ($response['success']) {
            return Redirect::route('blogs.index', [
                'subject' => $request['subject_id'],
            ])
                ->with('success', "Blog successfully updated.");
        } else {
            return Redirect()
                ->back()
                ->with('error', "Blog updation failed.");
        };
    }
}
