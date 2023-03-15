<?php

declare(strict_types=1);

namespace App\Forms\UserProgression;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateUserProgressionRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'progression' => 'required|integer|min:0|max:100',
        ];
    }
}
