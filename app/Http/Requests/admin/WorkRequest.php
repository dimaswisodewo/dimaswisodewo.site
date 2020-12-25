<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'title' => 'required|max:255',
            'project_date' => 'required|date',
            'short_description' => 'required|max:255',
            'project_type' =>'required|max:255'
        ];
    }
}
