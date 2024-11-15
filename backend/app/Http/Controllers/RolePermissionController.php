<?php

namespace App\Http\Controllers;

use App\Contracts\RoleServiceInterface;
use App\Http\Requests\Admin\Dashboard\Role\RoleCreateRequest;
use App\Http\Resources\Admin\Dashboard\Role\AllRolesResource;
use App\Http\Resources\Admin\Dashboard\Role\RoleByIdResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RolePermissionController extends BaseController
{
    /**
     * @var RoleServiceInterface
     */
    private RoleServiceInterface $roleService;

    /**
     * @param RoleServiceInterface $roleService
     */
    public function __construct(RoleServiceInterface $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        return Inertia::render('Role/RoleIndex');
    }

    public function create()
    {
        return Inertia::render('Role/RoleCreate');
    }

    /**
     * @param RoleCreateRequest $request
     * @return JsonResponse
     */
    public function store(RoleCreateRequest $request): JsonResponse
    {
        $data = $request->all();
        $role = $this->roleService->createRole($data['role'], $data['permissions']);

        return $this->response(
            [
                'role' => $role,
            ],
            'Create role',
            true,
            Response::HTTP_CREATED
        );
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $role = $this
            ->roleService
            ->getRoleById($id);

        return $this->response(
            [
                'role' => RoleByIdResource::make($role),
            ],
            'Get role',
            true,
            Response::HTTP_OK
        );
    }

    public function edit(int $id)
    {
        return Inertia::render('Role/RoleEdit', ['id' => $id]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        $data = $request->all();

        $role = $this
            ->roleService
            ->updateRole($id, $data['role'], $data['permissions']);

        return $this->response(
            [
                'role' => $role,
            ],
            'Update role',
            true,
            Response::HTTP_OK
        );
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $isDelete = $this->roleService->deleteRole($id);

        return $this->response(
            [
                'delete' => $isDelete,
            ],
            'Delete role',
            true,
            Response::HTTP_OK
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getAllUsersWithPaginate(Request $request): JsonResponse
    {
        $data = $request->all();

        $roles = $this
            ->roleService
            ->getAllRolesWithPagination($data['limit']);

        return response()->json([
            'data' => AllRolesResource::collection($roles),
            'count' => $roles->total()
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function getPermissions(): JsonResponse
    {
        return $this->response(
            [
                'permissions' => [
                    'lesson' => Permission::where('name', 'like', '%lesson')->get(),
                    'user' => Permission::where('name', 'like', '%user')->get(),
                ],
            ],
            'All permissions',
            true,
            Response::HTTP_OK
        );
    }

    /**
     * @return JsonResponse
     */
    public function getRolesCollection(): JsonResponse
    {
        $roles = $this->roleService->getAllRolesCollection();

        return $this->response(
            [
                'roles' => AllRolesResource::collection($roles),
            ],
            'Get all roles collection',
            true,
            Response::HTTP_OK
        );
    }
}
