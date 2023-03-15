<?php

declare(strict_types=1);

namespace App\Repositories\Lesson;

use App\Models\Lesson;
use App\Repositories\AbstractFindAllByCriteria;
use Illuminate\Database\Eloquent\Model;

final class LessonRepository extends AbstractFindAllByCriteria implements LessonRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(Lesson::query());
    }

    public function find(int $id): ?Model
    {
        return Lesson::query()->find($id);
    }
}
