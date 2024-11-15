<?php

namespace Tests\Feature\Category;

use App\Models\LessonCategory;
use App\Models\User;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
//    use DatabaseTransactions;
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     * run all test => vendor/bin/phpunit
     * run concrete test in class => clear && php vendor/bin/phpunit --filter=CategoryControllerTest
     * run container and run php artisan => docker exec -ti backend-education bash
     *
     * @return void
     */
    public function test_create_category(): void
    {
        // arrange
        $this->actingAs(User::factory()->create());

        // act
        // assert
        /** @var MakesHttpRequests $category */
        $this->post('admin/category', [
        ])->assertSessionHasErrors(['name']);
    }

    public function test_create_category_success()
    {
        // arrange
        $this->actingAs(User::factory()->create());

        // act
        /** @var MakesHttpRequests $category */
        $response = $this->post(
            'admin/category', ['name' => 'new_category']);

        // assert
        $response->assertJson([
            'data' => [
                'category' => ['name' => 'new_category'],
            ]
        ]);

        $response->assertJson(['status' => Response::HTTP_CREATED]);
    }

    public function test_get_category_by_id_if_not_exist_and_return_404()
    {
        // arrange
        $this->actingAs(User::factory()->create());

        // act
        /** @var MakesHttpRequests $category */
        $response = $this->get('admin/category/' . random_int(1,10));

        // assert
        $response->assertJson(['status' => false]);
        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }

    public function test_get_category_by_id_if_exist()
    {
        // arrange
        $category = LessonCategory::factory()->create();
        $this->actingAs(User::factory()->create());

        // act
        $response = $this->get('admin/category/' . $category->id);

        // assert
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJson([
            'data' => [
                'category' => [
                    'name' => $category->name
                ]
            ],
        ]);
    }

    public function test_update_category_lesson_by_id_where_name_equal_name_in_database()
    {
        // arrange
        $category = LessonCategory::factory()->create();
        $this->actingAs(User::factory()->create());
        $this->withoutMiddleware(VerifyCsrfToken::class);

        $oldName = $category->name;

        // act
        $response = $this->put('admin/category/' . $category->id, [
            'name' => $oldName
        ]);

        // assert
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJson([
            'data' => [
                'category' => [
                    'name' => $oldName
                ]
            ],
        ]);
    }

    public function test_delete_lesson_category_if_exists_return_true_status()
    {
        // arrange
        $category = LessonCategory::factory()->create();
        $this->actingAs(User::factory()->create());
        $this->withoutMiddleware(VerifyCsrfToken::class);

        // act
        $response = $this->delete('admin/category/' . $category->id);

        // assert
        $response->assertJson([
            'data' => [],
            'status' => true
        ]);
    }

    public function test_delete_lesson_category_if_not_exists_return_false_status()
    {
        // arrange
        $category = LessonCategory::factory()->create();
        $this->actingAs(User::factory()->create());
        $this->withoutMiddleware(VerifyCsrfToken::class);

        $categoryId = $category->id;
        // act
        $this->delete('admin/category/' . $categoryId);
        $response = $this->delete('admin/category/' . $categoryId);

        // assert
        $response->assertJson([
            'data' => [],
            'status' => false
        ]);
    }
}
