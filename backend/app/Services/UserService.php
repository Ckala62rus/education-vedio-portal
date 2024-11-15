<?php

namespace App\Services;

use App\Contracts\UserRepositoryInterface;
use App\Contracts\UserServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    public UserRepositoryInterface $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsersWithPagination(int $limit = 10): LengthAwarePaginator
    {
        return $this->userRepository->getAllUserWithPaginate($limit);
    }

    public function getAllUsersCollection(): Collection
    {
        return $this->userRepository->getAllUsers();
    }

    public function createUser(array $data): Model
    {
        if(isset($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }
        return $this->userRepository->createUser($data);
    }

    public function getUserById(int $id): ?Model
    {
        return $this->userRepository->getUserById($id);
    }

    public function updateUser(int $id, array $data): ?Model
    {
        $user = $this->userRepository->getUserById($id);

        if (isset($data['role_id'])){
            $user->syncRoles($data['role_id']);
        }

        return $this->userRepository->updateUser($id, $data);
    }

    public function deleteUser(int $id): bool
    {
        return $this->userRepository->deleteUser($id);
    }


    public function avatar(UploadedFile $file): string
    {
        return '';
    }
}
