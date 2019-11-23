<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'post_id'=>'required',
            'content'=>'required',
            'is_active'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'post_id.required'=>'Vui lòng chọn bài viết không được để trống',
            'content.required'=>'Content không được bỏ trống',
            'is_active.required'=>'Trang thái không được bỏ trống',
        ];
    }
}
