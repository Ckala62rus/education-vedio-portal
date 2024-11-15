<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface LessonServiceInterface
{
    public function getAllLessonsPagination(int $limit): LengthAwarePaginator;
    public function getAllLessonsCollection(): Collection;
    public function createLesson(array $data): Model;
    public function getLessonById(int $id): ?Model;
    public function updateLesson(int $id, array $data): ?Model;
    public function deleteLesson(int $id): bool;
    public function getLessonPreview(array $data, int $lessonId): ?string;
}
