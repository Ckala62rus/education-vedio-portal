<?php

namespace Tests\Feature\Role;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class RoleControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     * run all test => vendor/bin/phpunit
     * run concrete test in class => clear && vendor/bin/phpunit --filter=RoleControllerTest
     * run container and run php artisan => docker exec -ti backend-education bash
     *
     * @return void
     */
    public function test_create_role_test()
    {
        // arrange
        $data = [
            'role' => [
                'name' => 'new_role',
            ],
            'permissions' => [],
        ];

        // authenticate random user
        $user = User::factory()->create();
        $this->actingAs($user);

        // act
        $response = $this->post('/admin/role', $data)->decodeResponseJson();

        // assert
        $this->assertTrue($response['status']);
        $this->assertEquals($data['role']['name'], $response['data']['role']['name']);
    }

    public function test_add_permission_role()
    {
        // arrange
        Permission::create(['name' => 'create lesson']);
        Permission::create(['name' => 'read lesson']);
        Permission::create(['name' => 'update lesson']);
        Permission::create(['name' => 'delete lesson']);

        $permissionsIds = Permission::where('name', 'create lesson')
            ->orWhere('name', 'delete lesson')
            ->get()->pluck('id')->toArray();

        $data = [
            'role' => [
                'name' => 'test_role',
            ],
            'permissions' => $permissionsIds,
        ];

        // authenticate random user
        $user = User::factory()->create();
        $this->actingAs($user);

        // act
        $response = $this->post('/admin/role', $data)->decodeResponseJson();

        // assert
        $this->assertTrue(true);
        $this->assertEquals($data['role']['name'], $response['data']['role']['name']);
        $this->assertEquals($response['data']['role']['permissions'][0]['name'], 'create lesson');
        $this->assertEquals($response['data']['role']['permissions'][1]['name'], 'delete lesson');
        $this->assertCount(2, $response['data']['role']['permissions']);
    }
}
