<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveContactUsDetails extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'email'=>'required|email',
            'date_of_birth'=>'required',
            'mobile'=>'required',
            'qualification'=>'required',
            'location'=>'required',
            'resume_file'=>'required',
            'resume_content'=>'required'
        ];
    }
}
