<?php

declare(strict_types=1);

namespace App\Forms\Auth;

use Illuminate\Foundation\Http\FormRequest;

final class LoginRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => 'required|string|max:64',
            'password' => 'required|string|min:6',
        ];
    }
}
