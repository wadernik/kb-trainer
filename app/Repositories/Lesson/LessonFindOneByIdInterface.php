<?php

declare(strict_types=1);

namespace App\Repositories\Lesson;

use Illuminate\Database\Eloquent\Model;

interface LessonFindOneByIdInterface
{
    public function find(int $id): ?Model;
}
