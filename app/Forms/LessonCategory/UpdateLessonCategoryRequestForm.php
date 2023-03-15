<?php

declare(strict_types=1);

namespace App\Forms\LessonCategory;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateLessonCategoryRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|name|max:128',
        ];
    }
}
