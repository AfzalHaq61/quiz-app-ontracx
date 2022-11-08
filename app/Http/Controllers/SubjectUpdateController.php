<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SubjectUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NCwiaWF0IjoxNjY3ODg5ODc4LCJleHAiOjE2Njc5NzYyNzh9.Fe_F6jAPhxH4Vh15s0vLEtVCku_o-ityX1e_r4kq5Zs';

        $image = $request->file('image');

        // post request with attachment
        $imageResponse = Http::withToken($token)
            ->attach('file', file_get_contents($image), 'image.png')
            ->post('http://13.230.182.156:3000/api/upload/image');

        $imageUrl =  $imageResponse['url'];

        $response = Http::withToken($token)
            ->put('http://13.230.182.156:3000/api/subjects/update/'.request('subject'), [
                'title' => $request['title'],
                'color_code' => $request['color_code'],
                'icon' => $imageUrl,
            ]);
    
        if ($response['success']) {
            return Inertia::render('subjects.index')
                ->with('success', $response['message']);
        } else {
            return Redirect()
                ->back()
                ->with('error', $response['error']);
        }
    }
}
