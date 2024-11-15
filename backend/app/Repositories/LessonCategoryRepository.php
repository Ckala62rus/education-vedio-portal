<?php

namespace App\Repositories;

use App\Contracts\LessonCategoryRepositoryInterface;
use App\Models\LessonCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class LessonCategoryRepository extends BaseRepository implements LessonCategoryRepositoryInterface
{
    public function __construct()
    {
        $this->model = new LessonCategory();
    }

    /**
     * Create new lesson category and return model
     * @param array $data
     * @return Model
     */
    public function createLessonCategory(array $data): Model
    {
        return $this->create($data);
    }

    /**
     * Get model lesson category by id
     * @param int $id
     * @return Model|null
     */
    public function getLessonCategoryById(int $id): ?Model
    {
        return $this->getById($id);
    }

    /**
     * Update and return lesson category by id
     * @param int $id
     * @param array $data
     * @return Model
     */
    public function updateLessonCategory(int $id, array $data): Model
    {
        return $this->update($id, $data);
    }

    /**
     * Delete lesson category by id
     * @param int $id
     * @return bool
     */
    public function deleteLessonCategory(int $id): bool
    {
        return $this->delete($id);
    }

    /**
     * Get all lesson categories
     * @return Collection
     */
    public function getAllLessonCategories(): Collection
    {
        return $this->getAll();
    }

    /**
     * Get all lesson categories with pagination
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllLessonsCategoriesWithPagination(int $limit): LengthAwarePaginator
    {
        return $this->getAllWithPagination($limit);
    }
}
