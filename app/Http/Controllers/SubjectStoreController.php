<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class SubjectStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NCwiaWF0IjoxNjY3ODg3NDQwLCJleHAiOjE2Njc5NzM4NDB9.GfZ1_GJZr6xiMrAlM_4EaQBKEpg278Mga6QdTx0Gal0';

        $image = $request->file('image');

        // post request with attachment
        $response = Http::withToken($token)
            ->attach('file', file_get_contents($image), 'image.png')
            ->post('http://13.230.182.156:3000/api/upload/image');

        $imageUrl =  $response['url'];

        $response = Http::withToken($token)
            ->post('http://13.230.182.156:3000/api/subjects/store/1', [
                'title' => $request['title'],
                'color_code' => $request['color_code'],
                'icon' => $imageUrl,
            ]);

        return Redirect::route('subjects.create')
            ->with('success', "Subject Created Successfully.");
    }
}