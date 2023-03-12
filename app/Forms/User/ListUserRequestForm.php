<?php

declare(strict_types=1);

namespace App\Forms\User;

use Illuminate\Foundation\Http\FormRequest;

final class ListUserRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'filter.id' => 'sometimes|integer',
            'filter.first_name' => 'sometimes|string|max:128',
            'filter.last_name' => 'sometimes|string|max:128|nullable',
            'limit' => 'sometimes',
            'page' => 'sometimes',
            'sort' => 'sometimes|string',
            'order' => 'sometimes|string',
        ];
    }
}
