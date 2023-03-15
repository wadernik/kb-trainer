<?php

declare(strict_types=1);

namespace App\Requests\LessonCategory;

use Illuminate\Contracts\Support\Arrayable;

interface CreateLessonCategoryRequestInterface extends Arrayable
{
    public function name(): string;
}
