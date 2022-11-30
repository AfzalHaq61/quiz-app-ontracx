<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

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

        $image = $request->file('image');

        // post request with attachment
        $imageResponse = Http::withToken(apiAccessToken())
            ->attach('file', file_get_contents($image), $image->getClientOriginalName())
            ->post(config('global.api_url') . '/upload/image');

        $imageUrl =  $imageResponse['url'];

        $response = Http::withToken(apiAccessToken())
            ->post(config('global.api_url') . '/subjects/store/1', [
                'title' => $request['title'],
                'color_code' => $request['color_code'],
                'icon' => $imageUrl,
            ]);

        if ($response['success']) {
            return Redirect::route('subjects.index')
                ->with('success', "Subject successfully created.");
        } else {
            return Redirect()
                ->back()
                ->with('error', "Subject creation failed.");
        }
    }
}
