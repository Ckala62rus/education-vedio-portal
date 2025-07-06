<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;

abstract class BaseControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Base route for the controller
     */
    protected string $baseRoute;

    /**
     * Model factory class
     */
    protected string $modelFactory;

    /**
     * Setup controller test environment
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        // Always authenticate user for controller tests
        $this->authenticatedUser();
    }

    /**
     * Test index endpoint
     */
    protected function assertIndexEndpoint(string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute;
        $response = $this->get($route);
        
        $response->assertStatus(200);
        
        return $response;
    }

    /**
     * Test create endpoint with invalid data
     */
    protected function assertCreateValidationFails(array $invalidData, string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute;
        $response = $this->post($route, $invalidData);
        
        $response->assertStatus(302); // Web routes redirect on validation errors
        $response->assertSessionHasErrors();
        
        return $response;
    }

    /**
     * Test create endpoint with valid data
     */
    protected function assertCreateSuccess(array $validData, string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute;
        $response = $this->post($route, $validData);
        
        $response->assertStatus(201);
        
        return $response;
    }

    /**
     * Test show endpoint with existing resource
     */
    protected function assertShowSuccess($model, string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute . '/' . $model->id;
        $response = $this->get($route);
        
        $response->assertStatus(200);
        
        return $response;
    }

    /**
     * Test show endpoint with non-existing resource
     */
    protected function assertShowNotFound(int $nonExistentId = 999, string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute . '/' . $nonExistentId;
        $response = $this->get($route);
        
        $response->assertStatus(404);
        
        return $response;
    }

    /**
     * Test update endpoint
     */
    protected function assertUpdateSuccess($model, array $updateData, string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute . '/' . $model->id;
        $response = $this->put($route, $updateData);
        
        $response->assertStatus(200);
        
        return $response;
    }

    /**
     * Test delete endpoint
     */
    protected function assertDeleteSuccess($model, string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute . '/' . $model->id;
        $response = $this->delete($route);
        
        $response->assertStatus(200);
        
        return $response;
    }

    /**
     * Test pagination endpoint
     */
    protected function assertPaginationEndpoint(int $limit = 10, string $route = null): TestResponse
    {
        $route = $route ?? $this->baseRoute . '/paginate';
        $response = $this->get($route . '?limit=' . $limit);
        
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data',
            'count'
        ]);
        
        return $response;
    }

    /**
     * Create model using factory
     */
    protected function createModel(array $attributes = [])
    {
        if (!isset($this->modelFactory)) {
            throw new \Exception('Model factory not defined in test class');
        }
        
        return $this->modelFactory::factory()->create($attributes);
    }

    /**
     * Create multiple models using factory
     */
    protected function createModels(int $count, array $attributes = [])
    {
        if (!isset($this->modelFactory)) {
            throw new \Exception('Model factory not defined in test class');
        }
        
        return $this->modelFactory::factory()->count($count)->create($attributes);
    }
} 