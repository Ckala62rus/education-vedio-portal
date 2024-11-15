<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LessonCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get all lessons for concrete lessonCategory
     * @return HasMany
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(
            Lesson::class,
            'category_id',
            'id'
        );
    }
}
