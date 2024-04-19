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
          //  'password' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => __('Vui lòng chọn Category'),
            'category_id.integer' => __('Vui lòng chọn Category'),
            'email.email' => __('Invalid Email'),
            'password.required' => __('Invalid password'),
        ];
    }
}
