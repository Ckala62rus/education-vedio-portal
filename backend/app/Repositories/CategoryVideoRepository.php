<?php


namespace App\Repositories;


use App\Contracts\CategoryVideoRepositoryInterface;
use App\Models\CategoryVideo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryVideoRepository extends BaseRepository implements CategoryVideoRepositoryInterface
{
    /**
     * CategoryVideoRepository constructor.
     */
    public function __construct()
    {
        $this->model = new CategoryVideo();
    }

    /**
     * Create category video entity
     * @param array $data
     * @return Model
     */
    public function createCategoryVideo(array $data): Model
    {
        return $this->create($data);
    }

    /**
     * Get entity by id
     * @param int $id
     * @return Model|null
     */
    public function getCategoryVideoById(int $id): ?Model
    {
        return $this->getById($id);
    }

    /**
     * Update entity by id
     * @param int $id
     * @param array $data
     * @return Model
     */
    public function updateCategoryVideo(int $id, array $data): Model
    {
        return $this->update($id, $data);
    }

    /**
     * Delete entity by id
     * @param int $id
     * @return bool
     */
    public function deleteCategoryVideo(int $id): bool
    {
        return $this->delete($id);
    }

    /**
     * Get collection entities (retrieve all)
     * @return Collection
     */
    public function getAllCategoryVideo(): Collection
    {
        return $this->getAll();
    }

    /**
     * Get entities with pagination
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllCategoryVideoWithPagination(int $limit): LengthAwarePaginator
    {
        return $this->getAllWithPagination($limit);
    }
}
