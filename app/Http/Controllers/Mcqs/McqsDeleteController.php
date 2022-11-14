<?php

namespace App\Http\Controllers\Mcqs;

use App\Http\Controllers\Controller;
use App\Models\Mcq;
use Illuminate\Http\Request;

class McqsDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Mcq $mcq)
    {
        $mcq->delete();

        return Redirect()
            ->back()
            ->with('success', "Mcq successfully deleted.");
    }
}
