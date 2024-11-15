<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface LessonCategoryRepositoryInterface
{
    public function createLessonCategory(array $data): Model;
    public function getLessonCategoryById(int $id): ?Model;
    public function updateLessonCategory(int $id, array $data): Model;
    public function deleteLessonCategory(int $id): bool;
    public function getAllLessonCategories(): Collection;
    public function getAllLessonsCategoriesWithPagination(int $limit): LengthAwarePaginator;
}
