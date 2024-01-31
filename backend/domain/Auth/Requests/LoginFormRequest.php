<?php

namespace Domain\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $username
 * @property string $email
 * @property string $password
 * @property boolean $remember_me
 */
class LoginFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'email' => [
                'required_without_all:username',
                'string',
                'email',
                'max:255',
            ],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'The email field is required.',
            'username.required' => 'The username field is required',
            'password.required' => 'The password field is required'
        ];
    }
}
