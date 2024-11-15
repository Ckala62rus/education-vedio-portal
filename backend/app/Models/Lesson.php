<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Lesson extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'text',
        'is_publish',
        'category_id',
        'preview',
    ];

    protected $casts = [
        'is_publish' => 'boolean'
    ];

    public function category(): HasOne
    {
        return $this->hasOne(
            LessonCategory::class,
            'id',
            'category_id'
        );
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->nonQueued();
    }
}
