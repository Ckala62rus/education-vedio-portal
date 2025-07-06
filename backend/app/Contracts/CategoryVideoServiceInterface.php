<?php


namespace App\Contracts;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface CategoryVideoServiceInterface
{
    public function createCategoryVideo(array $data): Model;
    public function getCategoryVideoById(int $id): ?Model;
    public function updateCategoryVideo(int $id, array $data): Model;
    public function deleteCategoryVideo(int $id): bool;
    public function getAllCategoryVideo(): Collection;
    public function getAllCategoryVideoWithPagination(int $limit): LengthAwarePaginator;
}
