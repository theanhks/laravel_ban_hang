<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'phone' => 'required|max:20',
            'email' => 'nullable|email',
            'gender' => 'required',
            'password' => 'required|confirmed:password_confirmation',
            'password_confirmation' => 'required',
        ];

        return $rules;
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     *
     * @throws \App\Exceptions\ValidationException
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        return view('frontend.user.validate');
    }
}
