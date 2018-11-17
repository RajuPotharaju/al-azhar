<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveJobApplicationDetails extends FormRequest
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
            'full_name' => 'required',
            'email'=>'required|email|unique:users',
            'date_of_birth'=>'required',
            'mobile'=>'required|numeric|digits:10',
            'qualification'=>'required',
            'location'=>'required',
            'resume_file'=>'required',
            'resume_content'=>'required|min:150|max:10000'
        ];
    }
}
