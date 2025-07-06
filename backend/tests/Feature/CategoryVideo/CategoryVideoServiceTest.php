<?php

namespace Tests\Feature\CategoryVideo;

use App\Contracts\CategoryVideoRepositoryInterface;
use App\Models\CategoryVideo;
use App\Services\CategoryVideoService;
use Illuminate\Pagination\LengthAwarePaginator;
use Tests\BaseServiceTest;

class CategoryVideoServiceTest extends BaseServiceTest
{
    protected string $serviceClass = CategoryVideoService::class;
    protected string $repositoryInterface = CategoryVideoRepositoryInterface::class;

    /**
     * Test create category video with valid data
     */
    public function test_create_category_video_success(): void
    {
        // Arrange
        $data = $this->getCategoryTestData();
        $expectedModel = CategoryVideo::factory()->make($data);

        $this->mockRepository
            ->shouldReceive('createCategoryVideo')
            ->with($data)
            ->andReturn($expectedModel)
            ->once();

        // Act
        $result = $this->service->createCategoryVideo($data);

        // Assert
        $this->assertEquals($expectedModel->name, $result->name);
        $this->assertEquals($expectedModel->description, $result->description);
    }

    /**
     * Test get category video by ID when exists
     */
    public function test_get_category_video_by_id_success(): void
    {
        // Arrange
        $categoryVideo = CategoryVideo::factory()->make(['id' => 1]);
        $this->assertGetByIdOperation(1, 'getCategoryVideoById', $categoryVideo);
    }

    /**
     * Test get category video by ID when not exists
     */
    public function test_get_category_video_by_id_not_found(): void
    {
        $this->assertGetByIdOperation(999, 'getCategoryVideoById', null);
    }

    /**
     * Test update category video
     */
    public function test_update_category_video_success(): void
    {
        // Arrange
        $data = $this->getCategoryTestData(['name' => 'Updated Name']);
        $updatedModel = CategoryVideo::factory()->make($data);

        $this->mockRepository
            ->shouldReceive('updateCategoryVideo')
            ->with(1, $data)
            ->andReturn($updatedModel)
            ->once();

        // Act
        $result = $this->service->updateCategoryVideo(1, $data);

        // Assert
        $this->assertEquals($updatedModel->name, $result->name);
    }

    /**
     * Test delete category video success
     */
    public function test_delete_category_video_success(): void
    {
        $this->assertDeleteOperation(1, 'deleteCategoryVideo', true);
    }

    /**
     * Test delete category video when not exists
     */
    public function test_delete_category_video_not_found(): void
    {
        $this->assertDeleteOperation(999, 'deleteCategoryVideo', false);
    }

    /**
     * Test get all category videos collection
     */
    public function test_get_all_category_videos_collection(): void
    {
        $this->assertGetAllOperation('getAllCategoryVideo', 3);
    }

    /**
     * Test get paginated category videos
     */
    public function test_get_paginated_category_videos(): void
    {
        // Arrange
        $limit = 10;
        $mockPaginator = new LengthAwarePaginator(
            CategoryVideo::factory()->count(5)->make(),
            5,
            $limit,
            1
        );

        $this->mockRepository
            ->shouldReceive('getAllCategoryVideoWithPagination')
            ->with($limit)
            ->andReturn($mockPaginator)
            ->once();

        // Act
        $result = $this->service->getAllCategoryVideoWithPagination($limit);

        // Assert
        $this->assertInstanceOf(LengthAwarePaginator::class, $result);
        $this->assertEquals(5, $result->total());
        $this->assertEquals($limit, $result->perPage());
    }

    /**
     * Data provider for validation tests
     */
    public function invalidDataProvider(): array
    {
        return [
            'empty name' => [['name' => '', 'description' => 'Test description']],
            'null name' => [['name' => null, 'description' => 'Test description']],
            'too long name' => [['name' => str_repeat('a', 256), 'description' => 'Test description']],
        ];
    }

    /**
     * Test create category video with invalid data
     * @dataProvider invalidDataProvider
     */
    public function test_create_category_video_validation_fails(array $invalidData): void
    {
        $this->mockRepository
            ->shouldReceive('createCategoryVideo')
            ->with($invalidData)
            ->andThrow(new \Exception('Validation failed'))
            ->once();

        $this->expectException(\Exception::class);
        $this->service->createCategoryVideo($invalidData);
    }
} 