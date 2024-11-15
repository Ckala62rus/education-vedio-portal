<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface RoleRepositoryInterface
{
    public function createRole(array $data): Model;
    public function getRoleById(int $id): ?Model;
    public function updateRole(int $id, array $data, array $permissions = []): Model;
    public function deleteRole(int $id): bool;
    public function getAllRoles(): Collection;
    public function getAllRolesWithPaginate(int $limit): LengthAwarePaginator;
}
