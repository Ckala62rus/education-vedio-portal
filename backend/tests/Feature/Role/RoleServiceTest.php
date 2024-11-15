<?php

namespace Tests\Feature\Role;

use App\Services\RoleService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RoleServiceTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     * run all test => vendor/bin/phpunit
     * run concrete test in class => clear && vendor/bin/phpunit --filter=RoleServiceTest
     * run container and run php artisan => docker exec -ti backend-education bash
     * add seeder in test method $this->artisan('db:seed --class=PermissionSeeder');
     *refresh testDB => php artisan migrate:refresh --database=testing
     *
     * @return void
     */
    public function test_create_role()
    {
        // arrange
        $roleName = ['name' => 'manager'];

        /** @var  RoleService  $roleService */
        $roleService = $this
            ->app
            ->make(RoleService::class);

        // act
        $role = $roleService->createRole($roleName);

        // assert
        $this->assertEquals($role->name, $roleName['name']);
    }

    public function test_get_role_by_id()
    {
        // arrange
        $roleName = ['name' => 'manager'];

        /** @var  RoleService  $roleService */
        $roleService = $this
            ->app
            ->make(RoleService::class);

        $roleCreated = $roleService->createRole($roleName);

        // act
        $role = $roleService->getRoleById($roleCreated->id);

        // assert
        $this->assertEquals($role->id, $roleCreated->id);
        $this->assertEquals($role->name, $roleCreated->name);
    }

    public function test_get_role_by_id_if_not_exist()
    {
        // arrange
        /** @var  RoleService  $roleService */
        $roleService = $this
            ->app
            ->make(RoleService::class);

        // act
        $roleNotFound = $roleService->getRoleById(1);

        // assert
        $this->assertNull($roleNotFound);
    }

    public function test_update_role_by_id()
    {
        // arrange
        $roleName = ['name' => 'manager'];

        /** @var  RoleService  $roleService */
        $roleService = $this
            ->app
            ->make(RoleService::class);

        $roleCreated = $roleService
            ->createRole($roleName);

        // act
        $roleUpdated = $roleService
            ->updateRole($roleCreated->id, ['name' => 'updated_name']);

        // assert
        $this->assertEquals($roleUpdated->id, $roleCreated->id);
        $this->assertNotEquals($roleUpdated->name, $roleCreated->name);
    }

    public function test_delete_role_by_id_if_exists()
    {
        // arrange
        $roleName = ['name' => 'manager'];

        /** @var  RoleService  $roleService */
        $roleService = $this
            ->app
            ->make(RoleService::class);

        $roleCreated = $roleService
            ->createRole($roleName);

        // act
        $isDeleted = $roleService->deleteRole($roleCreated->id);

        // assert
        $this->assertTrue($isDeleted);
    }

    public function test_delete_role_by_id_if_not_exists()
    {
        // arrange
        // act
        /** @var  RoleService  $roleService */
        $roleService = $this
            ->app
            ->make(RoleService::class);

        $isDeleteFalse = $roleService->deleteRole(1);

        // assert
        $this->assertFalse($isDeleteFalse);
    }
}
