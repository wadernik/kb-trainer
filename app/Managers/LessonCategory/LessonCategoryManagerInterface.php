<?php

declare(strict_types=1);

namespace App\Managers\LessonCategory;

interface LessonCategoryManagerInterface extends LessonCategoryCreatorInterface,
                                                 LessonCategoryUpdaterInterface,
                                                 LessonCategoryDeleterInterface
{
}
