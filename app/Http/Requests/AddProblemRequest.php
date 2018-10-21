<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProblemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'                 => 'required',
            'category'              => 'required',
            'content_problem'       => 'required',
            'content_solution'      => 'required'
        ];
    }
}
