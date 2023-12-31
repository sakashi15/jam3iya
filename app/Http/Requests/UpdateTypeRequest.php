<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
            'id' => 'required|exists:types,id',
            'name'=>'required|string',
            'description'=>'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'النوع اجباري',
            'name.exists' => 'Tنوع موجود من قبل',
            'id.required' => 'معرف النوع اجباري',
            'id.exists' => 'نوع غير موجود'
        ];
    }
}
