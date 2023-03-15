<?php

declare(strict_types=1);

namespace App\Forms\LessonCategory;

use Illuminate\Foundation\Http\FormRequest;

final class CreateLessonCategoryRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:128',
        ];
    }
}
