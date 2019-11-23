<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class UpProfileRequest extends FormRequest
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
            'name' => 'required',
            'birthday' => 'required',
            'phone' => 'required|max:12',
            'email'=> 'required|email',
            'password' => 'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống',
            'birthday.required' => 'Birthday không được để trống',
            'phone.required' => 'Phone không được để trống',
            'phone.max' => 'Phone không được vượt qua 12 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng email@xxx.com',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password phải từ 8 ký tự',
        ];
    }
}
