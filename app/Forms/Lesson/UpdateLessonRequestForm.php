<?php

declare(strict_types=1);

namespace App\Forms\Lesson;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateLessonRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'active' => 'sometimes|bool',
            'required_progression' => 'sometimes|integer|min:0|max:100',
            'code' => 'sometimes|string',
            'lesson' => 'sometimes|json',
        ];
    }
}
