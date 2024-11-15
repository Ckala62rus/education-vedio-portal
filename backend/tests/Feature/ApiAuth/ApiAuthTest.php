<?php

namespace Tests\Feature\ApiAuth;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ApiAuthTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     * run all test => vendor/bin/phpunit
     * run concrete test in class => clear && php vendor/bin/phpunit --filter=ApiAuthTest
     * run container and run php artisan => docker exec -ti backend-education bash
     *
     * @return void
     */
    public function test_register_and_login_user_get_bearer_token()
    {
        // arrange
        $this->post('/api/register', [
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => '123123',
            'confirm_password' => '123123',
        ]);

        $credentials = ['email' => 'admin@mail.ru', 'password' => '123123'];

        // act
        $response = $this->post('/api/login', $credentials);

        // assert
        $response->assertStatus(200);
    }

    public function test_get_current_user()
    {
        // arrange
        $this->post('/api/register', [
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => '123123',
            'confirm_password' => '123123',
        ]);

        $credentials = ['email' => 'admin@mail.ru', 'password' => '123123'];

        $response = $this->post('/api/login', $credentials);

        $token = $response->decodeResponseJson()['data']['auth']['token'];

        // act
        $responseCurrentUser = $this
            ->get('/api/me', ['Authentication' => 'Bearer ' . $token]);

        $currentUser = $responseCurrentUser->decodeResponseJson()['data']['user'];

        // assert
        $responseCurrentUser->assertStatus(200);
        $this->assertEquals($credentials['email'], $currentUser['email']);
    }

    public function test_logout()
    {
        // arrange
        $this->post('/api/register', [
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => '123123',
            'confirm_password' => '123123',
        ]);

        $credentials = ['email' => 'admin@mail.ru', 'password' => '123123'];

        $response = $this->post('/api/login', $credentials);

        $token = $response->decodeResponseJson()['data']['auth']['token'];

        $responseCurrentUser = $this
            ->get('/api/me', ['Authentication' => 'Bearer ' . $token]);

        $currentUser = $responseCurrentUser->decodeResponseJson()['data']['user'];

        // act
        $logout = $this->post('/api/logout', [], [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $getMeAfterLogout = $this
            ->get('/api/me', [
                'Authorization' => 'Bearer ' . $token,
            ]);
//dump($getMeAfterLogout->status());
        // assert
        $this->assertEquals($credentials['email'], $currentUser['email']);
        $this->assertTrue($logout->decodeResponseJson()['status']);
    }
}
