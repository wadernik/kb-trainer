<?php

declare(strict_types=1);

namespace App\Forms\User;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateUserRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'sometimes|string|max:128',
            'last_name' => 'sometimes|string|max:128|nullable',
            'phone' => 'sometimes|regex:/^\d{11}$/',
            'email' => 'sometimes|string|email|nullable',
        ];
    }
}
