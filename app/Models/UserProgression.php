<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class UserProgression extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'lesson_id',
        'progression'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
