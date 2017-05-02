<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class RoleRequest extends FormRequest
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
        $name = $this->get('id') != '' ? 'required|max:255|unique:roles,name,'.$this->get('id').',id' : 'required|max:255|unique:roles,name';
        return [
            'name' => $name,
            'display_name' => 'required',
        ];
    }
}
