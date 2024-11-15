<?php

namespace App\Repositories;

use App\Contracts\RoleRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\Permission\Models\Role;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    public function __construct()
    {
        // Spatie laravel permission model
        $this->model = new Role();
    }

    public function createRole(array $data): Model
    {
        return $this->create($data);
    }

    public function getRoleById(int $id): ?Model
    {
        return $this->getById($id);
    }

    public function updateRole(int $id, array $data, array $permissions = []): Model
    {
        $role = $this->update($id, $data);

        $role->syncPermissions($permissions);

        return $role;
    }

    public function deleteRole(int $id): bool
    {
        return $this->delete($id);
    }

    public function getAllRoles(): Collection
    {
        return $this->getAll();
    }

    public function getAllRolesWithPaginate(int $limit): LengthAwarePaginator
    {
        return $this->getAllWithPagination($limit);
    }
}
