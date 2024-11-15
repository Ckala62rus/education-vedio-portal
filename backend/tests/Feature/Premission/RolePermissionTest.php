<?php

namespace Tests\Feature\Premission;

use App\Services\RoleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class RolePermissionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     * run all test => vendor/bin/phpunit
     * run concrete test in class => clear && vendor/bin/phpunit --filter=RolePermissionTest
     * run container and run php artisan => docker exec -ti backend-education bash
     * add seeder in test method $this->artisan('db:seed --class=PermissionSeeder');
     *refresh testDB => php artisan migrate:refresh --database=testing
     *
     * @return void
     */
    public function test_create_role_with_permission()
    {
        // arrange
        Permission::create(['name' => 'create lesson']);
        Permission::create(['name' => 'read lesson']);
        Permission::create(['name' => 'update lesson']);
        Permission::create(['name' => 'delete lesson']);

        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        $role = ['name' => 'manager'];

        $permissions = Permission::whereIn('id', [1,9,2,8,3])
            ->pluck('id')
            ->toArray();

        /** @var  RoleService  $roleService */
        $roleService = $this
            ->app
            ->make(RoleService::class);


        // act
        $roleCreated = $roleService
            ->createRole($role, $permissions);

        // assert
        $this->assertCount(4, $roleCreated->permissions->toArray());
    }
}
