<?php

declare(strict_types=1);

namespace App\Managers\Lesson;

use Illuminate\Database\Eloquent\Model;

interface LessonDeleterInterface
{
    public function delete(int $id): ?Model;
}
