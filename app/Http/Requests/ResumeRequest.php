<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
        $email = $this->get('id') != '' ? 'required|max:255|unique:resumes,email,'.$this->get('id').',id' : 'required|max:255|unique:resumes,email';
        return [
            'email' => $email,
            'status' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'experience' => 'required',
            'education' => 'required',
        ];
    }
}
