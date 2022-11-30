<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\McqsCreateRequest;
use App\Models\Mcq;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class McqsStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(McqsCreateRequest $request)
    {
        $data = $request->validated();

        $response = Http::withToken(apiAccessToken())
            ->post(config('global.api_url') . '/mcqs/store/' . request('subject'), [
                'question' => $data['question'],
                'correct_ans' => $data['correct_ans'],
                'option_1' => $data['option_1'],
                'option_2' => $data['option_2'],
                'option_3' => $data['option_3'],
                'option_4' => $data['option_4'],
                'hint' => $data['hint'],
                'reference' => $data['reference'],
            ]);

        if ($response['success']) {
            return Redirect::route('mcqs.index', [
                'subject' => request('subject'),
            ])
                ->with('success', "Mcq successfully created.");
        } else {
            return Redirect()
                ->back()
                ->with('error', "Mcq creation failed.");
        }
    }
}
