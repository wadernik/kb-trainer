<?php

declare(strict_types=1);

namespace App\Forms\UserProgression;

use Illuminate\Foundation\Http\FormRequest;

final class ListUserProgressionRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'filter.id' => 'sometimes|integer',
            'filter.user_id' => 'sometimes|string|max:128',
            'filter.lesson_id' => 'sometimes|string|max:128|nullable',
            'limit' => 'sometimes',
            'page' => 'sometimes',
            'sort' => 'sometimes|string',
            'order' => 'sometimes|string',
        ];
    }
}
