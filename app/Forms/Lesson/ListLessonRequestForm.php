<?php

declare(strict_types=1);

namespace App\Forms\Lesson;

use Illuminate\Foundation\Http\FormRequest;

final class ListLessonRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'filter.id' => 'sometimes|integer',
            'filter.category_id' => 'sometimes|string|max:128',
            'filter.required_progression' => 'sometimes|int|min:0|max:100',
            'limit' => 'sometimes',
            'page' => 'sometimes',
            'sort' => 'sometimes|string',
            'order' => 'sometimes|string',
        ];
    }
}
