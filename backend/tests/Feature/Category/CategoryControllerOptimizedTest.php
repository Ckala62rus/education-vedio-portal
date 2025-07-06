<?php

namespace Tests\Feature\Category;

use App\Models\LessonCategory;
use Tests\BaseControllerTest;

class CategoryControllerOptimizedTest extends BaseControllerTest
{
    protected string $baseRoute = 'admin/category';
    protected string $modelFactory = LessonCategory::class;

    /**
     * Test create category with missing required fields
     */
    public function test_create_category_validation_fails(): void
    {
        $response = $this->assertCreateValidationFails([]);
        $response->assertSessionHasErrors(['name']);
    }

    /**
     * Test create category with valid data
     */
    public function test_create_category_success(): void
    {
        $data = $this->getCategoryTestData();
        
        $response = $this->assertCreateSuccess($data, $this->baseRoute);
        
        $response->assertJson([
            'data' => [
                'category' => ['name' => $data['name']],
            ],
            'status' => 201
        ]);
    }

    /**
     * Test get category by ID when not exists
     */
    public function test_get_category_by_id_not_found(): void
    {
        $response = $this->assertShowNotFound();
        
        $response->assertJson(['status' => false]);
        $response->assertStatus(404);
    }

    /**
     * Test get category by ID when exists
     */
    public function test_get_category_by_id_success(): void
    {
        $category = $this->createModel();
        
        $response = $this->assertShowSuccess($category);
        
        $response->assertJson([
            'data' => [
                'category' => [
                    'name' => $category->name
                ]
            ],
        ]);
    }

    /**
     * Test update category with same name
     */
    public function test_update_category_same_name(): void
    {
        $category = $this->createModel();
        $updateData = ['name' => $category->name];
        
        $response = $this->assertUpdateSuccess($category, $updateData);
        
        $response->assertJson([
            'data' => [
                'category' => [
                    'name' => $category->name
                ]
            ],
        ]);
    }

    /**
     * Test delete category when exists
     */
    public function test_delete_category_success(): void
    {
        $category = $this->createModel();
        
        $response = $this->assertDeleteSuccess($category);
        
        $response->assertJson([
            'data' => [],
            'status' => true
        ]);
    }

    /**
     * Test delete category when not exists
     */
    public function test_delete_category_not_found(): void
    {
        $category = $this->createModel();
        
        // Delete once to remove it
        $this->delete($this->baseRoute . '/' . $category->id);
        
        // Try to delete again
        $response = $this->delete($this->baseRoute . '/' . $category->id);
        
        $response->assertJson([
            'data' => [],
            'status' => false
        ]);
    }

    /**
     * Data provider for CRUD operations
     */
    public function categoryDataProvider(): array
    {
        return [
            'basic category' => [['name' => 'Programming']],
            'category with description' => [['name' => 'Web Development', 'description' => 'Frontend and Backend']],
            'category with special chars' => [['name' => 'C++ Programming']],
        ];
    }

    /**
     * Test creating multiple categories with different data
     * @dataProvider categoryDataProvider
     */
    public function test_create_multiple_categories(array $data): void
    {
        $response = $this->assertCreateSuccess($data, $this->baseRoute);
        
        $response->assertJson([
            'data' => [
                'category' => ['name' => $data['name']]
            ],
            'status' => 201
        ]);
    }

    /**
     * Test full CRUD cycle for a category
     */
    public function test_full_crud_cycle(): void
    {
        // Create
        $createData = $this->getCategoryTestData();
        $createResponse = $this->assertCreateSuccess($createData, $this->baseRoute);
        $createResponse->assertJson(['status' => 201]);
        
        // Get created category ID from response
        $categoryId = $createResponse->json('data.category.id');
        
        // Read
        $readResponse = $this->get($this->baseRoute . '/' . $categoryId);
        $readResponse->assertStatus(200);
        $readResponse->assertJson([
            'data' => [
                'category' => ['name' => $createData['name']]
            ]
        ]);
        
        // Update
        $updateData = $this->getCategoryTestData(['name' => 'Updated ' . $createData['name']]);
        $updateResponse = $this->put($this->baseRoute . '/' . $categoryId, $updateData);
        $updateResponse->assertStatus(200);
        $updateResponse->assertJson([
            'data' => [
                'category' => ['name' => $updateData['name']]
            ]
        ]);
        
        // Delete
        $deleteResponse = $this->delete($this->baseRoute . '/' . $categoryId);
        $deleteResponse->assertStatus(200);
        $deleteResponse->assertJson([
            'data' => [],
            'status' => true
        ]);
        
        // Verify deletion
        $verifyResponse = $this->get($this->baseRoute . '/' . $categoryId);
        $verifyResponse->assertStatus(404);
    }
} 