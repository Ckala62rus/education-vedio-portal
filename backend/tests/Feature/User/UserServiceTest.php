<?php

namespace Tests\Feature\User;

use App\Contracts\UserRepositoryInterface;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
//    use RefreshDatabase;
//    use DatabaseMigrations;
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     * run all test => vendor/bin/phpunit
     * run concrete test in class => clear && vendor/bin/phpunit --filter=UserServiceTest
     * run container and run php artisan => docker exec -ti backend-education bash
     *
     * @return void
     */
    public function test_create_user()
    {
        // arrange
        $user = User::factory()->create();

        $config = \Mockery::mock(UserRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('createUser')
            ->andReturn($user)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this
            ->app
            ->instance(UserRepositoryInterface::class, $config);

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        // act
        $userCreated = $userService->createUser($user->toArray());

        // assert
        $this->assertEquals($userCreated->name, $user->name);
        $this->assertEquals($userCreated->email, $user->email);
        $this->assertEquals($userCreated->id, $user->id);
    }

    public function test_get_all_users_collection()
    {
        // arrange
        $users = User::factory()->count(3)->create();

        $config = \Mockery::mock(UserRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getAllUsers')
            ->andReturn($users)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this
            ->app
            ->instance(UserRepositoryInterface::class, $config);

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        // act
        $usersCollection = $userService->getAllUsersCollection();

        // assert
        $this->assertCount(3, $usersCollection->toArray());
    }

    public function test_get_user_by_id_if_exist()
    {
        // arrange
        $user = User::factory()->create();
        $name = $user->name;

        $config = \Mockery::mock(UserRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getUserById')
            ->andReturn($user)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this
            ->app
            ->instance(UserRepositoryInterface::class, $config);

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        // act
        $userById = $userService->getUserById(1);

        // assert
        $this->assertEquals($user->id, $userById->id);
    }

    public function test_get_user_by_id_if_not_exist()
    {
        // arrange
        $config = \Mockery::mock(UserRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getUserById')
            ->andReturn(null)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this
            ->app
            ->instance(UserRepositoryInterface::class, $config);

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        // act
        $userNotFound = $userService->getUserById(1);

        // assert
        $this->assertNull($userNotFound);
    }

    public function test_update_user()
    {
        // arrange
        $userCreated = User::factory()->create();

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        // act
        $user = $userService->updateUser($userCreated->id, [
            'name' => 'updatedName',
            'email' => 'newEmail@mail.ru',
        ]);

        // assert
        $this->assertNotEquals($userCreated->name, $user->name);
        $this->assertNotEquals($userCreated->email, $user->email);
    }

    public function test_update_user_with_role()
    {
        // arrange
        $userCreated = User::factory()->create();
        $roleCreated = Role::create(['name' => 'Manager', 'guard_name' => 'web']);

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        // act
        $user = $userService->updateUser($userCreated->id, [
            'name' => 'updatedName',
            'email' => 'newEmail@mail.ru',
            'role_id' => $roleCreated->id
        ]);

        // assert
        $this->assertNotEquals($userCreated->name, $user->name);
        $this->assertNotEquals($userCreated->email, $user->email);
    }

    public function test_update_user_get_exception_not_uniq_email()
    {
        // arrange
        $userCreated = User::factory()->create();

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        // act
        // assert
        $this->assertThrows(function() use ($userService, $userCreated) {
            $userService->createUser([
                'name' => $userCreated->name,
                'email' => $userCreated->email,
                'password' => Hash::make('123123'),
            ]);
        }, QueryException::class);
    }

    public function test_delete_user_by_id()
    {
        // arrange
        $user = User::factory()->create();

        // act

        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        $isDeleted = $userService
            ->deleteUser($user->id);

        // assert
        $this->assertTrue($isDeleted);
    }

    public function test_delete_user_by_id_if_user_not_exists()
    {
        // arrange
        // act
        /** @var  UserService  $userService */
        $userService = $this
            ->app
            ->make(UserService::class);

        $isDeleted = $userService
            ->deleteUser(random_int (1, 100));

        // assert
        $this->assertFalse($isDeleted);
    }
}
