<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserREQ extends FormRequest
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
            'name' => 'required|max:255|min:5',
            'email' => 'required|email',
            'bio' =>'required|max:255|min:5',
            'password' => 'required',
            'picture' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'name.max' => 'عدد حروف الحقل كثيرة جدا',
            'name.min' => 'عدد حروف الحقل قليلة جدا',

            'email.required' => 'هذا الحقل مطلوب',
            'email.email' => 'هذا البريد غير صالح',

            'bio.required' => 'هذا الحقل مطلوب',
            'bio.max' => 'عدد حروف الحقل كثيرة جدا',
            'bio.min' => 'عدد حروف الحقل قليلة جدا',

            'password.required' => 'هذا الحقل مطلوب',

            'picture.required' => 'هذا الحقل مطلوب',
        ];
    }
}
