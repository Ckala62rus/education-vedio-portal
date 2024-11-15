<?php

namespace App\Repositories;

use App\Contracts\LessonRepositoryInterface;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class LessonRepository extends BaseRepository implements LessonRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Lesson();
    }

    /**
     * Create lesson by input data
     * @param array $data
     * @return Model
     */
    public function createLesson(array $data): Model
    {
        return $this->create($data);
    }

    /**
     * Return lesson by id or null
     * @param int $id
     * @return Model|null
     */
    public function getLessonById(int $id): ?Model
    {
        return $this->getById($id);
    }

    /**
     * Update one model by id and return updated model
     * @param int $id
     * @param array $data
     * @return Model
     */
    public function updateLesson(int $id, array $data): Model
    {
        return $this->update($id, $data);
    }

    /**
     * Delete lesson by id
     * @param int $id
     * @return bool
     */
    public function deleteLesson(int $id): bool
    {
        return $this->delete($id);
    }

    /**
     * Return get all lessons collection
     * @return Collection
     */
    public function getAllLessons(): Collection
    {
        return $this->getAll();
    }

    /**
     * Return lesson with paginate
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate(int $limit): LengthAwarePaginator
    {
        return $this->getAllWithPagination($limit);
    }
}
