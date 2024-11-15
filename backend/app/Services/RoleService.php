<?php

namespace App\Services;

use App\Contracts\RoleRepositoryInterface;
use App\Contracts\RoleServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleService implements RoleServiceInterface
{
    /**
     * @var RoleRepositoryInterface
     */
    private RoleRepositoryInterface $roleRepository;

    /**
     * @param RoleRepositoryInterface $roleRepository
     */
    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function getAllRolesWithPagination(int $limit): LengthAwarePaginator
    {
        return $this->roleRepository->getAllRolesWithPaginate($limit);
    }

    public function getAllRolesCollection(): Collection
    {
        return $this->roleRepository->getAllRoles();
    }

    public function createRole(array $data, array $permissions = []): Model
    {
        $data['guard_name'] = 'web';

        /** @var Role $role */
        $role = $this
            ->roleRepository
            ->createRole($data);

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return $role;
    }

    public function getRoleById(int $id): ?Model
    {
        return $this->roleRepository->getRoleById($id);
    }

    public function updateRole(int $id, array $data, array $permissions = []): ?Model
    {
        return $this->roleRepository->updateRole($id, $data, $permissions);
    }

    public function deleteRole(int $id): bool
    {
        return $this->roleRepository->deleteRole($id);
    }

    public function getAllPermissionsCollection(): Collection
    {
        return Permission::all();
    }
}
