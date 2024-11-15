<?php

namespace App\Http\Controllers;

use App\Contracts\UserServiceInterface;
use App\Http\Requests\Admin\Dashboard\User\UserCreateRequest;
use App\Http\Requests\Admin\Dashboard\User\UserUpdateRequest;
use App\Http\Resources\Admin\Dashboard\User\UserPaginateResource;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UserController extends BaseController
{
    /**
     * @var UserServiceInterface
     */
    private UserServiceInterface $userService;

    /**
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return Inertia::render('User/UserIndex');
    }

    public function create()
    {
        return Inertia::render('User/UserCreate');
    }

    /**
     * @param UserCreateRequest $request
     * @return JsonResponse
     */
    public function store(UserCreateRequest $request): JsonResponse
    {
        $user = $this
            ->userService
            ->createUser($request->validated());

        return $this->response(
            [$user],
            'User was created',
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
        $user = $this
            ->userService
            ->getUserById($id);

        return $this->response(
            [
                'user' => $user,
                'role' => $user->roles
            ],
            'Get user by id:' . $id,
            true,
            Response::HTTP_OK
        );
    }

    public function edit(int $id)
    {
        return Inertia::render('User/UserEdit', ['id' => $id]);
    }

    /**
     * @param UserUpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UserUpdateRequest $request, int $id): JsonResponse
    {
        $user = $this
            ->userService
            ->updateUser($id, $request->all());

        return $this->response(
            [$user],
            'Update user by id:' . $id,
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
        return $this->response(
            [$this->userService->deleteUser($id)],
            'Delete user by id:' . $id,
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

        $users = $this
            ->userService
            ->getAllUsersWithPagination($data['limit']);

        return response()->json([
            'data' => UserPaginateResource::collection($users),
            'count' => $users->total()
        ]);
    }

    /**
     * Upload image for user avatar
     * @param Request $request
     * @return JsonResponse
     */
    public function setAvatar(Request $request): JsonResponse
    {
        $avatar = $request->all()['avatar'];

        $user = Auth::user();

        $uniqueFileName = md5($avatar->getClientOriginalName(). time());

        // clear old avatar
        $user->clearMediaCollection('avatar');

        // set new avatar
        $user
            ->addMedia($avatar)
            ->usingName($uniqueFileName)
            ->toMediaCollection('avatar');

        $url = empty($user->getFirstMediaUrl('avatar'))
            ? null
            : $user->getFirstMediaUrl('avatar', 'preview');

        return $this->response([
            'url' => $url
        ],
        'URL of avatar',
        true,
        Response::HTTP_OK
        );
    }

    /**
     * Get url of avatar
     * @return JsonResponse
     */
    public function getAvatar(): JsonResponse
    {
        /** @var User $user */
        $user = Auth::user();

        $url = empty($user->getFirstMediaUrl('avatar'))
            ? null
            : $user->getFirstMediaUrl('avatar', 'preview');

        return $this->response([
            'url' => $url
        ],
            'URL of avatar',
            true,
            Response::HTTP_OK
        );
    }
}
