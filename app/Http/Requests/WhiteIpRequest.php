<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhiteIpRequest extends FormRequest
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
        $ip = $this->get('id') != '' ? 'required|max:255|unique:white_ips,ip,'.$this->get('id').',id' : 'required|max:255|unique:white_ips,ip|ip';
        return [
            'ip' => $ip,
        ];
    }
}
