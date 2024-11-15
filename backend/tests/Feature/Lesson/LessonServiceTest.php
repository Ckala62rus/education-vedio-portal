<?php

namespace Tests\Feature\Lesson;

use App\Contracts\LessonRepositoryInterface;
use App\Models\Lesson;
use App\Services\LessonService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LessonServiceTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     * run all test => vendor/bin/phpunit
     * run concrete test in class => clear && vendor/bin/phpunit --filter=LessonServiceTest
     * run container and run php artisan => docker exec -ti backend-education bash
     *
     * @return void
     */
    public function test_example()
    {
        // arrange
        $lesson = new Lesson();
        $lesson->title = 'some title';
        $lesson->description = 'some description';
        $lesson->text = 'lorem ipsum dollar sit amet';
        $lesson->save();

        $lesson2 = new Lesson();
        $lesson2->title = 'some title';
        $lesson2->description = 'some description';
        $lesson2->text = 'lorem ipsum dollar sit amet';
        $lesson2->save();

        $collection = Collection::make([$lesson, $lesson2]);

        // Подготавливаем методы репозитория, которые вернут нужные нам данные
        $config = \Mockery::mock(LessonRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getAllLessons')
            ->andReturn($collection)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this->app->instance(LessonRepositoryInterface::class, $config);

        /** @var  LessonService $lessonService */
        $lessonService = $this->app->make(LessonService::class);

        // act

        $lessons = $lessonService->getAllLessonsCollection();

        // assert
        $this->assertCount(2, $lessons);
    }

    public function test_createLesson()
    {
        // arrange
        $prepareData = [
            'title' => 'some title',
            'description' => 'some description',
            'text' => 'lorem ipsum dollar sit amet',
            'is_publish' => false
        ];

        $lesson = Lesson::create($prepareData);

        // Подготавливаем методы репозитория, которые вернут нужные нам данные
        $config = \Mockery::mock(LessonRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('createLesson')
            ->andReturn($lesson)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this->app->instance(LessonRepositoryInterface::class, $config);

        /** @var  LessonService $lessonService */
        $lessonService = $this->app->make(LessonService::class);

        // act
        $getLesson = $lessonService->createLesson($prepareData);

        //assert
        $this->assertFalse($getLesson->is_publish);
        $this->assertEquals(1, $getLesson->id);
    }

    public function test_get_lesson_by_id()
    {
        // arrange
        $prepareData = [
            'title' => 'some title',
            'description' => 'some description',
            'text' => 'lorem ipsum dollar sit amet',
            'is_publish' => false
        ];

        $lesson = Lesson::create($prepareData);

        // Подготавливаем методы репозитория, которые вернут нужные нам данные
        $config = \Mockery::mock(LessonRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getLessonById')
            ->andReturn($lesson)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this->app->instance(LessonRepositoryInterface::class, $config);

        /** @var  LessonService $lessonService */
        $lessonService = $this->app->make(LessonService::class);

        // act
        $getLesson = $lessonService->getLessonById(1);

        //assert
        $this->assertFalse($getLesson->is_publish);
        $this->assertEquals(1, $getLesson->id);
    }

    public function test_get_lesson_by_id_not_exists_return_null()
    {
        // arrange

        // Подготавливаем методы репозитория, которые вернут нужные нам данные
        $config = \Mockery::mock(LessonRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('getLessonById')
            ->andReturn(null)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this->app->instance(LessonRepositoryInterface::class, $config);

        /** @var  LessonService $lessonService */
        $lessonService = $this->app->make(LessonService::class);

        // act
        $getLesson = $lessonService->getLessonById(1);

        //assert
        $this->assertNull($getLesson);
    }

    public function test_delete_lesson_by_id_if_exist_lesson()
    {
        // arrange
        $prepareData = [
            'title' => 'some title',
            'description' => 'some description',
            'text' => 'lorem ipsum dollar sit amet',
            'is_publish' => false
        ];

        $lesson = Lesson::create($prepareData);

        // Подготавливаем методы репозитория, которые вернут нужные нам данные
        $config = \Mockery::mock(LessonRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('deleteLesson')
            ->andReturn(true)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this->app->instance(LessonRepositoryInterface::class, $config);

        /** @var  LessonService $lessonService */
        $lessonService = $this->app->make(LessonService::class);

        // act
        $getLesson = $lessonService->deleteLesson($lesson->id);

        //assert
        $this->assertTrue($getLesson);
    }

    public function test_delete_lesson_by_id_if_not_exists_lesson()
    {
        // arrange

        // Подготавливаем методы репозитория, которые вернут нужные нам данные
        $config = \Mockery::mock(LessonRepositoryInterface::class)->makePartial();
        $config
            ->shouldReceive('deleteLesson')
            ->andReturn(false)
            ->once();

        // Связываем нашу подготовку с репозиторием
        $this->app->instance(LessonRepositoryInterface::class, $config);

        /** @var  LessonService $lessonService */
        $lessonService = $this->app->make(LessonService::class);

        // act
        $getLesson = $lessonService->deleteLesson(1);

        //assert
        $this->assertFalse($getLesson);
    }
}
