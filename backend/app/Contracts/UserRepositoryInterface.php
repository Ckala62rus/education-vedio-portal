<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserRepositoryInterface
{
    public function createUser(array $data): Model;
    public function getUserById(int $id): ?Model;
    public function updateUser(int $id, array $data): Model;
    public function deleteUser(int $id): bool;
    public function getAllUsers(): Collection;
    public function getAllUserWithPaginate(int $limit): LengthAwarePaginator;
}
