<?php
namespace App\Http\Requests\Auth;
use Illuminate\Foundation\Http\FormRequest;
class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email', // bắt buộc, đúng định dạng, có tồn tại trong hệ thống.
            'password' => 'required|min:5', // bắt buộc, tối thiểu 6 kí tự
        ];
    }
    public function messages()
    {
        return [
            // 'key' => 'value',
            'email.required' => 'Email là thông tin bắt buộc',
            'password.required' => 'Password là thông tin bắt buộc',
            'min' => 'Pasword phải từ 5 ký tự trở lên',
            'email' => 'Email không đúng định dạng email@xxx.com',
            'exit' => 'Email không tồn tại',
        ];
    }
}