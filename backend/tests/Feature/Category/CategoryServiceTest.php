<?php

namespace Tests\Feature\Category;

use App\Contracts\LessonCategoryRepositoryInterface;
use App\Models\LessonCategory;
use App\Services\LessonCategoryService;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CategoryServiceTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     * run all test => php vendor/bin/phpunit
     * run concrete test in class => clear && php vendor/bin/phpunit --filter=CategoryServiceTest
     * run container and run php artisan => docker exec -ti backend-education bash
     *
     * @return void
     */
    public function test_create_lesson_category()
    {
        // arrange
        $data = ['name' => 'first'];
        $categoryPrepare = LessonCategory::create($data);

        $config = \Mockery::mock(LessonCategoryRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('createLessonCategory')
            ->andReturn($categoryPrepare)
            ->once();

        $this->app->instance(LessonCategoryService::class, $config);

        /** @var LessonCategoryService $lessonCategoryService */
        $lessonCategoryService = $this->app->make(LessonCategoryService::class);

        // act
        $lesson = $lessonCategoryService
            ->createLessonCategory(['name' => 'first']);

        // assert
        $this->assertEquals($data['name'], $lesson->name);
    }

    public function test_get_lesson_category_by_id()
    {
        // arrange
        $categoryFactory = LessonCategory::factory()->create();

        $config = \Mockery::mock(LessonCategoryRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getLessonCategoryById')
            ->andReturn($categoryFactory)
            ->once();

        $this->app->instance(LessonCategoryService::class, $config);

        /** @var LessonCategoryService $lessonCategoryService */
        $lessonCategoryService = $this->app->make(LessonCategoryService::class);

        // act
        $category = $lessonCategoryService
            ->getLessonCategoryById($categoryFactory->id);

        // assert
        $this->assertEquals($categoryFactory->id, $category->id);
        $this->assertEquals($categoryFactory->name, $category->name);
        $this->assertEquals($categoryFactory->description, $category->description);
    }

    public function test_get_lesson_category_by_id_if_not_exists()
    {
        // arrange
        $config = \Mockery::mock(LessonCategoryRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getLessonCategoryById')
            ->andReturn(null)
            ->once();

        $this->app->instance(LessonCategoryService::class, $config);

        /** @var LessonCategoryService $lessonCategoryService */
        $lessonCategoryService = $this->app->make(LessonCategoryService::class);

        // act
        $category = $lessonCategoryService->getLessonCategoryById(random_int(1,10));

        // assert
        $this->assertNull($category);
    }

    public function test_update_lesson_category_by_id()
    {
        // arrange
        $categoryFactory = LessonCategory::factory()->create();
        $oldname = $categoryFactory->name;

        $updateData = ['name' => 'update_name'];
        $categoryFactory->update($updateData);

        $categoryFactoryUpdate = LessonCategory::find($categoryFactory->id);
        $newName = $categoryFactoryUpdate->name;

        $config = \Mockery::mock(LessonCategoryRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('updateLessonCategory')
            ->andReturn($categoryFactoryUpdate)
            ->once();

        $this->app->instance(LessonCategoryService::class, $config);

        /** @var LessonCategoryService $lessonCategoryService */
        $lessonCategoryService = $this->app->make(LessonCategoryService::class);

        // act
        $category = $lessonCategoryService
            ->updateLessonCategory($categoryFactory->id, $updateData);

        // assert
        $this->assertNotEquals($oldname, $newName);
        $this->assertEquals($categoryFactory->id, $category->id);
    }

    public function test_delete_lesson_category_and_return_true()
    {
        // arrange
        $config = \Mockery::mock(LessonCategoryRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('deleteLessonCategory')
            ->andReturn(true)
            ->once();

        $this->app->instance(LessonCategoryService::class, $config);

        /** @var LessonCategoryService $lessonCategoryService */
        $lessonCategoryService = $this->app->make(LessonCategoryService::class);

        // act
        $isDelete = $lessonCategoryService->deleteLessonCategory(random_int(1,10));

        // assert
        $this->assertTrue($isDelete);
    }

    public function test_get_collection_lesson_categories()
    {
        // arrange
        $randomNumberCountCollection = random_int(5,10);
        $categoryCollection = LessonCategory::factory()->count($randomNumberCountCollection)->create();

        $config = \Mockery::mock(LessonCategoryRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getAllLessonCategories')
            ->andReturn($categoryCollection)
            ->once();

        $this->app->instance(LessonCategoryService::class, $config);

        /** @var LessonCategoryService $lessonCategoryService */
        $lessonCategoryService = $this->app->make(LessonCategoryService::class);

        // act

        $categories = $lessonCategoryService->getAllLessonCategories();

        // assert
        $this->assertCount($randomNumberCountCollection, $categories);
    }
}
