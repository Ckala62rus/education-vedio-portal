<?php

namespace App\Services;

use App\Contracts\CategoryVideoRepositoryInterface;
use App\Contracts\CategoryVideoServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


class CategoryVideoService implements CategoryVideoServiceInterface
{
    /**
     * CategoryVideoService constructor.
     * @param CategoryVideoRepositoryInterface $categoryVideoRepository
     */
    public function __construct(
        protected CategoryVideoRepositoryInterface $categoryVideoRepository
    ){}

    /**
     * Create a new category video
     * @param array $data
     * @return Model
     */
    public function createCategoryVideo(array $data): Model
    {
        return $this->categoryVideoRepository->createCategoryVideo($data);
    }

    /**
     * Get category video by ID
     * @param int $id
     * @return Model|null
     */
    public function getCategoryVideoById(int $id): ?Model
    {
        return $this->categoryVideoRepository->getCategoryVideoById($id);
    }

    /**
     * Update category video
     * @param int $id
     * @param array $data
     * @return Model
     */
    public function updateCategoryVideo(int $id, array $data): Model
    {
        return $this->categoryVideoRepository->updateCategoryVideo($id, $data);
    }

    /**
     * Delete category video
     * @param int $id
     * @return bool
     */
    public function deleteCategoryVideo(int $id): bool
    {
        return $this->categoryVideoRepository->deleteCategoryVideo($id);
    }

    /**
     * Get all category videos
     * @return Collection
     */
    public function getAllCategoryVideo(): Collection
    {
        return $this->categoryVideoRepository->getAllCategoryVideo();
    }

    /**
     * Get all category videos with pagination
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllCategoryVideoWithPagination(int $limit): LengthAwarePaginator
    {
        return $this->categoryVideoRepository->getAllCategoryVideoWithPagination($limit);
    }
}