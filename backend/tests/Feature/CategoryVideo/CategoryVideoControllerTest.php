<?php

namespace Tests\Feature\CategoryVideo;

use App\Models\CategoryVideo;
use Symfony\Component\HttpFoundation\Response;
use Tests\BaseControllerTest;

class CategoryVideoControllerTest extends BaseControllerTest
{
    protected string $baseRoute = 'admin/category-videos';
    protected string $modelFactory = CategoryVideo::class;

    /**
     * Test index page renders successfully
     */
    public function test_index_page_renders(): void
    {
        $this->assertIndexEndpoint();
    }

    /**
     * Test create page renders successfully
     */
    public function test_create_page_renders(): void
    {
        $response = $this->get($this->baseRoute . '/create');
        $response->assertStatus(200);
    }

    /**
     * Test store with valid data  
     */
    public function test_store_category_video_success(): void
    {
        $data = $this->getCategoryTestData();
        
        $response = $this->post($this->baseRoute, $data);
        
        $response->assertStatus(201);
        $response->assertJson([
            'status' => true,
            'data' => [
                'category' => [
                    'name' => $data['name'],
                    'description' => $data['description']
                ]
            ]
        ]);
    }

    /**
     * Test store with invalid data
     */
    public function test_store_category_video_validation_fails(): void
    {
        $this->assertCreateValidationFails([]);
    }

    /**
     * Test show existing category video
     */
    public function test_show_category_video_success(): void
    {
        $categoryVideo = $this->createModel();
        
        $response = $this->assertShowSuccess($categoryVideo);
        
        $response->assertJson([
            'status' => true,
            'data' => [
                'category' => [
                    'id' => $categoryVideo->id,
                    'name' => $categoryVideo->name,
                    'description' => $categoryVideo->description
                ]
            ]
        ]);
    }

    /**
     * Test show non-existing category video
     */
    public function test_show_category_video_not_found(): void
    {
        $response = $this->assertShowNotFound();
        
        $response->assertJson([
            'status' => false
        ]);
    }

    /**
     * Test edit page renders successfully
     */
    public function test_edit_page_renders(): void
    {
        $categoryVideo = $this->createModel();
        
        $response = $this->get($this->baseRoute . '/' . $categoryVideo->id . '/edit');
        
        $response->assertStatus(200);
    }

    /**
     * Test update category video
     */
    public function test_update_category_video_success(): void
    {
        $categoryVideo = $this->createModel();
        $updateData = $this->getCategoryTestData(['name' => 'Updated Name']);
        
        $response = $this->assertUpdateSuccess($categoryVideo, $updateData);
        
        $response->assertJson([
            'status' => true,
            'data' => [
                'category' => [
                    'id' => $categoryVideo->id,
                    'name' => $updateData['name'],
                    'description' => $updateData['description']
                ]
            ]
        ]);
    }

    /**
     * Test update with same name (should succeed)
     */
    public function test_update_category_video_same_name(): void
    {
        $categoryVideo = $this->createModel();
        $updateData = ['name' => $categoryVideo->name, 'description' => 'Updated description'];
        
        $response = $this->assertUpdateSuccess($categoryVideo, $updateData);
        
        $response->assertJson([
            'status' => true,
            'data' => [
                'category' => [
                    'name' => $updateData['name']
                ]
            ]
        ]);
    }

    /**
     * Test delete category video
     */
    public function test_delete_category_video_success(): void
    {
        $categoryVideo = $this->createModel();
        
        $response = $this->assertDeleteSuccess($categoryVideo);
        
        $response->assertJson([
            'status' => true,
            'data' => []
        ]);
    }

    /**
     * Test delete non-existing category video
     */
    public function test_delete_category_video_not_found(): void
    {
        $response = $this->delete($this->baseRoute . '/999');
        
        $response->assertJson([
            'status' => false,
            'data' => []
        ]);
    }

    /**
     * Test pagination endpoint
     */
    public function test_pagination_endpoint(): void
    {
        $this->createModels(15);
        
        $response = $this->assertPaginationEndpoint(10);
        
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'description',
                    'created_at',
                    'updated_at'
                ]
            ],
            'count'
        ]);
    }

    /**
     * Test collection endpoint
     */
    public function test_collection_endpoint(): void
    {
        $this->createModels(5);
        
        $response = $this->get($this->baseRoute . '/collection');
        
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'description',
                    'created_at',
                    'updated_at'
                ]
            ]
        ]);
    }

    /**
     * Data provider for validation tests
     */
    public function validationDataProvider(): array
    {
        return [
            'empty name' => [['name' => '', 'description' => 'Test'], ['name']],
            'null name' => [['name' => null, 'description' => 'Test'], ['name']],
            'too long name' => [['name' => str_repeat('a', 256), 'description' => 'Test'], ['name']],
        ];
    }

    /**
     * Test validation errors
     * @dataProvider validationDataProvider
     */
    public function test_validation_errors(array $data, array $expectedErrors): void
    {
        $response = $this->post($this->baseRoute, $data);
        
        $response->assertStatus(302); // Web routes redirect on validation errors
        $response->assertSessionHasErrors($expectedErrors);
    }

    /**
     * Test unique name validation
     */
    public function test_unique_name_validation(): void
    {
        $existingCategory = $this->createModel();
        
        $response = $this->post($this->baseRoute, [
            'name' => $existingCategory->name,
            'description' => 'Different description'
        ]);
        
        $response->assertStatus(302); // Web routes redirect on validation errors
        $response->assertSessionHasErrors(['name']);
    }
} 