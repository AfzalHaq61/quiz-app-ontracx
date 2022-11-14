<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Models\Mcq;
use Illuminate\Support\Facades\Redirect;

class McqsStatusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Mcq $mcq)
    {
        $mcq->status = 1;

        $mcq->save();

        return Redirect::route('mcqs.index')
            ->with('success', "Mcq Status successfully updated.");
    }
}
