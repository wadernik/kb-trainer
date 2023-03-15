<?php

declare(strict_types=1);

namespace App\Requests\LessonCategory;

use Illuminate\Contracts\Support\Arrayable;

interface UpdateLessonCategoryRequestInterface extends Arrayable
{
    public function name(): string;
}
