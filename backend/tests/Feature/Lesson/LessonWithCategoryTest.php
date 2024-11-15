<?php

namespace Tests\Feature\Lesson;

use App\Models\Lesson;
use App\Models\LessonCategory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LessonWithCategoryTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     * run all test => php vendor/bin/phpunit
     * run concrete test in class => clear && php vendor/bin/phpunit --filter=LessonWithCategoryTest
     * run container and run php artisan => docker exec -ti backend-education bash
     *
     * @return void
     */
    public function test_add_category_for_lessons()
    {
        // arrange
        $data = [
            ['name' => 'news'],
            ['name' => 'social'],
        ];

        LessonCategory::insert($data);

        $categories = LessonCategory::all();

        $lessons = [];

        // act
        foreach ($categories as $category){
            $lessons[] = Lesson::factory()->make([
                'category_id' => $category->id
            ]);
        }

        // assert
        foreach ($lessons as $index => $lesson){
            $this->assertEquals($data[$index]['name'], $lesson->category->name);
        }
    }

    public function test_set_null_category_id_dependent_on_category_after_delete_category()
    {
        // arrange
        $data = [
            ['name' => 'news'],
            ['name' => 'social'],
        ];

        LessonCategory::insert($data);

        $categories = LessonCategory::all();

        foreach ($categories as $category){
            Lesson::factory()->create([
                'category_id' => $category->id
            ]);
        }

        // act
        LessonCategory::destroy(LessonCategory::all()->pluck('id'));
        $lessons = Lesson::all();

        // assert
        foreach ($lessons as $lesson){
            $this->assertNull($lesson->category);
        }
    }
}
