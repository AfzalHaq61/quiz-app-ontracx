<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LandingPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('Subjects/Subjects');
    }
}
