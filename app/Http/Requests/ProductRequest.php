<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'integer'],
            'name' => ['required'],
            'price' => ['integer'],
            'quantity' => ['integer'],
            'position' => ['integer'],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => __('Vui lòng chọn Category'),
            'category_id.integer' => __('Vui lòng chọn Category'),
            'name.required' => __('Vui lòng nhập tên sản phẩm'),
            'price.integer' => __('Vui lòng nhập tiền là số nguyên'),
            'quantity.integer' => __('Vui lòng nhập số lượng là số nguyên'),
            'position.integer' => __('Vui lòng nhập vị trí là số nguyên'),
        ];
    }
}
