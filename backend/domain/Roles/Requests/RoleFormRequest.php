<?php

namespace Domain\Roles\Requests;

use Domain\Roles\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $description
 */
class RoleFormRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'unique:' . Role::class],
            'description' => ['nullable']
        ];
    }
}
