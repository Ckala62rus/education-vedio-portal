<?php

namespace Tests;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery\MockInterface;

abstract class BaseServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The service class being tested
     */
    protected string $serviceClass;

    /**
     * The repository interface being mocked
     */
    protected string $repositoryInterface;

    /**
     * Mock repository instance
     */
    protected MockInterface $mockRepository;

    /**
     * Service instance
     */
    protected $service;

    /**
     * Setup service test environment
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        if (isset($this->repositoryInterface)) {
            $this->mockRepository = $this->mockInstance($this->repositoryInterface);
        }
        
        if (isset($this->serviceClass)) {
            $this->service = $this->app->make($this->serviceClass);
        }
    }

    /**
     * Test create operation with valid data
     */
    protected function assertCreateOperation(array $data, string $createMethod): void
    {
        // Arrange
        $expectedModel = new class {
            public function __get($key) {
                return $key === 'name' ? 'Test Name' : 'Test Value';
            }
        };

        $this->mockRepository
            ->shouldReceive($createMethod)
            ->with($data)
            ->andReturn($expectedModel)
            ->once();

        // Act
        $result = $this->service->{$createMethod}($data);

        // Assert
        $this->assertEquals($expectedModel, $result);
    }

    /**
     * Test get by ID operation
     */
    protected function assertGetByIdOperation(int $id, string $getMethod, $expectedResult = null): void
    {
        // Arrange
        $this->mockRepository
            ->shouldReceive($getMethod)
            ->with($id)
            ->andReturn($expectedResult)
            ->once();

        // Act
        $result = $this->service->{$getMethod}($id);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * Test update operation
     */
    protected function assertUpdateOperation(int $id, array $data, string $updateMethod): void
    {
        // Arrange
        $expectedModel = new class {
            public function __get($key) {
                return 'Updated Value';
            }
        };

        $this->mockRepository
            ->shouldReceive($updateMethod)
            ->with($id, $data)
            ->andReturn($expectedModel)
            ->once();

        // Act
        $result = $this->service->{$updateMethod}($id, $data);

        // Assert
        $this->assertEquals($expectedModel, $result);
    }

    /**
     * Test delete operation
     */
    protected function assertDeleteOperation(int $id, string $deleteMethod, bool $expectedResult = true): void
    {
        // Arrange
        $this->mockRepository
            ->shouldReceive($deleteMethod)
            ->with($id)
            ->andReturn($expectedResult)
            ->once();

        // Act
        $result = $this->service->{$deleteMethod}($id);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * Test get all operation
     */
    protected function assertGetAllOperation(string $getAllMethod, int $expectedCount = 5): void
    {
        // Arrange
        $collection = new Collection(
            array_fill(0, $expectedCount, new class {})
        );
        
        $this->mockRepository
            ->shouldReceive($getAllMethod)
            ->andReturn($collection)
            ->once();

        // Act
        $result = $this->service->{$getAllMethod}();

        // Assert
        $this->assertCount($expectedCount, $result);
    }
} 