<?php

declare(strict_types=1);

namespace App\Forms\LessonCategory;

use Illuminate\Foundation\Http\FormRequest;

final class ListLessonCategoryRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'filter.id' => 'sometimes|integer',
            'filter.name' => 'sometimes|string|max:128',
            'limit' => 'sometimes',
            'page' => 'sometimes',
            'sort' => 'sometimes|string',
            'order' => 'sometimes|string',
        ];
    }
}
