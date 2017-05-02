<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        $email = $this->get('id') != '' ? 'required|max:255|unique:users,email,'.$this->get('id').',id' : 'required|max:255|unique:users,email';
        return [
            'email' => $email,
            'name' => 'required',
            'role' => 'required',
        ];
    }
}
