<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blogs\BlogsCreateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Http;
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

        $image = $request->file('image');

        $imageResponse = Http::withToken(apiAccessToken())
            ->attach('file', file_get_contents($image), $image->getClientOriginalName())
            ->post(config('global.api_url') . '/upload/image');

        $imageUrl =  $imageResponse['url'];

        $response = Http::withToken(apiAccessToken())
            ->post(config('global.api_url') . '/blogs/store/' . request('subject'), [
                'title' => $data['title'],
                'reference' => $data['reference'],
                'cover_image' => $imageUrl,
                'description' => $data['description'],
            ]);

        if ($response['success']) {
            return Redirect::route('blogs.index', [
                'subject' => request('subject'),
            ])
                ->with('success', "Blog successfully created.");
        } else {
            return Redirect()
                ->back()
                ->with('error', "Blog creation failed.");
        };
    }
}
