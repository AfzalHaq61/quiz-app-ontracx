<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\McqsCreateRequest;
use App\Models\Mcq;
use Illuminate\Support\Facades\Redirect;

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

        try {
            Mcq::create([
                'subject_id' => request('subject'),
                'question' => $data['question'],
                'correct_answer' => $data['correct_answer'],
                'answer_one' => $data['answer_one'],
                'answer_two' => $data['answer_two'],
                'answer_three' => $data['answer_three'],
                'answer_four' => $data['answer_four'],
                'hint' => $data['hint'],
                'reference' => $data['reference'],
                'status' => false,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('mcqs.index')
            ->with('success', "Mcq Successfully Added.");
    }
}
