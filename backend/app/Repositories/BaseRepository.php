<?php

namespace App\Repositories;

use App\Contracts\BaseRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    /** @var $model Model */
    protected Model $model;

    /**
     * Create
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this
            ->model
            ->newQuery()
            ->create($data);
    }

    /**
     * Read
     * @param int $id
     * @return Model|null
     */
    public function getById(int $id): ?Model
    {
        return $this
            ->model
            ->newQuery()
            ->find($id);
    }

    /**
     * Update
     * @param int $id
     * @param array $data
     * @return Model
     */
    public function update(int $id, array $data): Model
    {
        $model = $this->getById($id);
        $model->update($data);

        return $model;
    }

    /**
     * Delete
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this
            ->model
            ->destroy($id);
    }

    /**
     * Get all
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this
            ->model
            ->all();
    }

    /**
     *
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllWithPagination(int $limit): LengthAwarePaginator
    {
        return $this
            ->model
            ->paginate();
    }
}
