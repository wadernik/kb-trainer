<?php

declare(strict_types=1);

namespace App\Forms\UserProgression;

use Illuminate\Foundation\Http\FormRequest;

final class CreateUserProgressionRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'lesson_id' => 'required|integer|exists:App\Models\Lesson,id',
            'progression' => 'required|integer|min:0|max:100',
        ];
    }
}
