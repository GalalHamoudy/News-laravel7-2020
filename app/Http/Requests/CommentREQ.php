<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentREQ extends FormRequest
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
            'com' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'com.required' => 'هذا الحقل مطلوب',
        ];
    }
}
