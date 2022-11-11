<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class McqsCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            
            'question' => 'required',
            'correct_answer' => 'required',
            'answer_one' => 'required',
            'answer_two' => 'required',
            'answer_three' => 'required',
            'answer_four' => 'required',
            'hint' => 'required',
            'reference' => 'required',

        ];
    }
}
