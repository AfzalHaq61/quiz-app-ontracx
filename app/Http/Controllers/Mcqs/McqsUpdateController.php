<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\McqsCreateRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class McqsUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(McqsCreateRequest $request)
    {
        $response = Http::withToken(apiAccessToken())
            ->put(config('global.api_url') . '/mcqs/update/' . request('mcq'), [
                'question' => $request['question'],
                'correct_ans' => $request['correct_ans'],
                'option_1' => $request['option_1'],
                'option_2' => $request['option_2'],
                'option_3' => $request['option_3'],
                'option_4' => $request['option_4'],
                'hint' => $request['hint'],
                'reference' => $request['reference'],
            ]);

        if ($response['success']) {
            return Redirect::route('mcqs.index', [
                'subject' => $request['subject_id'],
            ])
                ->with('success', "Mcq successfully updated.");
        } else {
            return Redirect()
                ->back()
                ->with('error', "Mcq updation failed.");
        };
    }
}
