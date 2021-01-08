<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryREQ extends FormRequest
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
            'ar_name' => 'required|max:255|min:5',
            'en_name' => 'required|max:255|min:5',
            'type' => 'required',
            'ar_description' => 'required|min:20',
            'en_description' => 'required|min:20',
            'status' => 'required|boolean',
            'picture' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ar_name.required' => 'هذا الحقل مطلوب',
            'ar_name.max' => 'عدد حروف الحقل كثيرة جدا',
            'ar_name.min' => 'عدد حروف الحقل قليلة جدا',

            'en_name.required' => 'This field is required',
            'en_name.max' => 'Too many characters in the field',
            'en_name.min' => 'Too few characters in the field',

            'type.required' => 'هذا الحقل مطلوب',

            'ar_description.required' => 'هذا الحقل مطلوب',
            'ar_description.min' => 'عدد حروف الحقل قليلة جدا',

            'en_description.required' => 'This field is required',
            'en_description.min' => 'Too few characters in the field',

            'status.required' => 'هذا الحقل مطلوب',
            'status.boolean' => 'هذا الحقل يقبل 0 و 1 فقط',

            'picture.required' => 'هذا الحقل مطلوب',
        ];
    }
}
