<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface RoleServiceInterface
{
    public function getAllRolesWithPagination(int $limit): LengthAwarePaginator;
    public function getAllRolesCollection(): Collection;
    public function getAllPermissionsCollection(): Collection;
    public function createRole(array $data, array $permissions = []): Model;
    public function getRoleById(int $id): ?Model;
    public function updateRole(int $id, array $data, array $permissions = []): ?Model;
    public function deleteRole(int $id): bool;
}
