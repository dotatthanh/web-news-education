<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'name' => [
                'required', 'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên danh mục là trường bắt buộc.', 
            'name.max' => 'Tên danh mục không được dài quá :max ký tự.', 
            'name.unique' => 'Tên danh mục đã tồn tại.', 
        ];
    }
}
