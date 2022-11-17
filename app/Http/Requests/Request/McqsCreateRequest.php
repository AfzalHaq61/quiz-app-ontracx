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
            'correct_ans' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'hint' => 'required',
            'reference' => 'required',

        ];
    }
}
