<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        $email = $this->get('id') != '' ? 'required|max:255|unique:vacancy,email,'.$this->get('id').',id' : 'required|max:255|unique:vacancy,email';
        return [
            'email' => $email,
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'phone' => 'required',
            'code' => 'required',
            'sex' => 'required',
            'birth_date' => 'required'
        ];
    }
}
