<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserServiceInterface
{
    public function getAllUsersWithPagination(int $limit): LengthAwarePaginator;
    public function getAllUsersCollection(): Collection;
    public function createUser(array $data): Model;
    public function getUserById(int $id): ?Model;
    public function updateUser(int $id, array $data): ?Model;
    public function deleteUser(int $id): bool;
    public function avatar(UploadedFile $file): string;
}
