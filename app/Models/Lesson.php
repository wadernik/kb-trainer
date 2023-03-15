<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'required_progression',
        'code',
        'active',
        'lesson',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(LessonCategory::class, 'category_id');
    }
}
