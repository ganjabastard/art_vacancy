<?php

    namespace App\Http\Requests\Products;

    use Illuminate\Foundation\Http\FormRequest;

    class ProductRequest extends FormRequest
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
                'name'                => 'required',
                'param.sum.min'       => 'required',
                'param.sum.max'       => 'required|greater:param.sum.min',
                'param.period.min'    => 'required',
                'param.period.max'    => 'required|greater:param.period.min',
                'param.postphone'     => 'required',
                'param.grace'         => 'required',
                'param.auto'          => 'required',
                'param.rate.interest' => 'required',
                'param.rate.def'      => 'required',
            ];
        }
    }
