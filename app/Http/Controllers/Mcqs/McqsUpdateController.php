<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\McqsCreateRequest;
use App\Models\Mcq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class McqsUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Mcq $mcq, McqsCreateRequest $request)
    {
        $mcq->subject_id = $request->subject_id;
        $mcq->question = $request->question;
        $mcq->correct_answer = $request->correct_answer;
        $mcq->answer_one = $request->answer_one;
        $mcq->answer_two = $request->answer_two;
        $mcq->answer_three = $request->answer_three;
        $mcq->answer_four = $request->answer_four;
        $mcq->hint = $request->hint;
        $mcq->reference = $request->reference;
        $mcq->status = $request->status;

        $mcq->save();

        return Redirect::route('mcqs.index')
            ->with('success', "Mcq successfully updated.");
    }
}
