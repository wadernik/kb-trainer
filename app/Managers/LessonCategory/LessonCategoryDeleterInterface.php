<?php

declare(strict_types=1);

namespace App\Managers\LessonCategory;

use Illuminate\Database\Eloquent\Model;

interface LessonCategoryDeleterInterface
{
    public function delete(int $id): ?Model;
}
