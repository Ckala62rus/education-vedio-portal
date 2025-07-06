<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Mockery;
use Mockery\MockInterface;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        // Disable CSRF for all tests
        $this->withoutMiddleware(VerifyCsrfToken::class);
    }

    /**
     * Create an authenticated user for testing
     */
    protected function authenticatedUser(array $attributes = []): User
    {
        $user = User::factory()->create($attributes);
        $this->actingAs($user);
        
        return $user;
    }

    /**
     * Create a mock for a given interface/class
     */
    protected function mockInstance(string $abstract, ?string $concrete = null): MockInterface
    {
        $mock = Mockery::mock($concrete ?? $abstract)->makePartial();
        $this->app->instance($abstract, $mock);
        
        return $mock;
    }

    /**
     * Assert that response has correct JSON structure for success
     */
    protected function assertSuccessResponse($response, array $data = [], int $status = 200): void
    {
        $response->assertStatus($status);
        $response->assertJson([
            'status' => true,
            'data' => $data
        ]);
    }

    /**
     * Assert that response has correct JSON structure for error
     */
    protected function assertErrorResponse($response, string $message = '', int $status = 400): void
    {
        $response->assertStatus($status);
        $response->assertJson([
            'status' => false,
            'message' => $message
        ]);
    }

    /**
     * Generate random test data for category
     */
    protected function getCategoryTestData(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Test Category ' . uniqid(),
            'description' => 'Test Description ' . uniqid()
        ], $overrides);
    }

    /**
     * Generate random test data for user
     */
    protected function getUserTestData(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Test User ' . uniqid(),
            'email' => 'test' . uniqid() . '@example.com',
            'password' => 'password123'
        ], $overrides);
    }

    /**
     * Clean up Mockery after each test
     */
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
