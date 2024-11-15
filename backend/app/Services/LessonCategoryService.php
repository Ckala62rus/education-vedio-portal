<?php

namespace App\Services;

use App\Contracts\LessonCategoryRepositoryInterface;
use App\Contracts\LessonCategoryServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class LessonCategoryService implements LessonCategoryServiceInterface
{
    /**
     * @var LessonCategoryRepositoryInterface
     */
    private LessonCategoryRepositoryInterface $lessonCategoryRepository;

    /**
     * @param LessonCategoryRepositoryInterface $lessonCategoryRepository
     */
    public function __construct(LessonCategoryRepositoryInterface $lessonCategoryRepository)
    {
        $this->lessonCategoryRepository = $lessonCategoryRepository;
    }

    /**
     * Create new Lesson category
     * @param array $data
     * @return Model
     */
    public function createLessonCategory(array $data): Model
    {
        return $this
            ->lessonCategoryRepository
            ->createLessonCategory($data);
    }

    /**
     * Get lesson category by id
     * @param int $id
     * @return Model|null
     */
    public function getLessonCategoryById(int $id): ?Model
    {
        return $this
            ->lessonCategoryRepository
            ->getLessonCategoryById($id);
    }

    /**
     * Update lesson category by id
     * @param int $id
     * @param array $data
     * @return Model
     */
    public function updateLessonCategory(int $id, array $data): Model
    {
        return $this
            ->lessonCategoryRepository
            ->updateLessonCategory($id, $data);
    }

    /**
     * Delete lesson category by id
     * @param int $id
     * @return bool
     */
    public function deleteLessonCategory(int $id): bool
    {
        return $this
            ->lessonCategoryRepository
            ->deleteLessonCategory($id);
    }

    /**
     * Get all lesson categories
     * @return Collection
     */
    public function getAllLessonCategories(): Collection
    {
        return $this
            ->lessonCategoryRepository
            ->getAllLessonCategories();
    }

    /**
     * Get all lesson categories with pagination
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllLessonsCategoriesWithPagination(int $limit): LengthAwarePaginator
    {
        return $this
            ->lessonCategoryRepository
            ->getAllLessonsCategoriesWithPagination($limit);
    }
}
