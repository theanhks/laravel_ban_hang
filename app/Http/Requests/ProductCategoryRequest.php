<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_name' => ['required'],
            'position' => ['integer'],
        ];
    }

    public function messages()
    {
        return [
            'category_name.required' => __('Vui lòng nhập tên danh mục'),
            'position.integer' => __('Vui lòng nhập vị trí là số nguyên'),
        ];
    }
}
