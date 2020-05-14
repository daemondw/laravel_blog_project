<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:505'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'your name',
            'email' => 'your email'
        ];
    }

    public function messages()
    {
        return [
//            'name.required' => 'your name should be written',
            'email.required' => 'your email should be in field'
        ];
    }
}
