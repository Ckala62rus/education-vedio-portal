<?php

namespace App\Http\Controllers;

use App\Contracts\LessonServiceInterface;
use App\Http\Requests\Admin\Dashboard\Lesson\LessonStoreRequest;
use App\Http\Resources\Admin\Dashboard\Lesson\LessonResource;
use App\Http\Resources\Admin\Dashboard\Lesson\LessonsAllResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LessonController extends BaseController
{
    /**
     * @var LessonServiceInterface
     */
    protected  LessonServiceInterface $lessonService;

    /**
     * LessonController constructor.
     * @param LessonServiceInterface $lessonService
     */
    public function __construct(LessonServiceInterface $lessonService)
    {
        $this->lessonService = $lessonService;
    }

    /**
     * @return Response
     */
    public function index()
    {
        return Inertia::render('Lesson/LessonIndex');
    }

    /**
     * @return JsonResponse
     */
    public function getAllLessons(): JsonResponse
    {
        $lessons = $this
            ->lessonService
            ->getAllLessonsPagination(10);

        return \response()->json([
            'data' => LessonsAllResource::collection($lessons),
            'count' => $lessons->total()
        ], JsonResponse::HTTP_OK);
    }

    /**
     * Return create view with inertia page
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Lesson/LessonCreate');
    }

    /**
     * @param LessonStoreRequest $request
     * @return JsonResponse
     */
    public function store(LessonStoreRequest $request): JsonResponse
    {
        $lesson = $this
            ->lessonService
            ->createLesson($request->all());

        return $this->response([
            'lesson' => $lesson
        ], 'crete new lesson success',
            true,
            JsonResponse::HTTP_CREATED
        );
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $lesson = $this
            ->lessonService
            ->getLessonById($id);

        if ($lesson) {
            return $this->response([
                'lesson' => LessonResource::make($lesson)
            ],
                'Get lesson by id',
                true,
                JsonResponse::HTTP_OK);
        }

        return $this->response([
            'lesson' => null
        ],
            'Get lesson by id',
            false,
            JsonResponse::HTTP_NOT_FOUND);
    }

    /**
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        return Inertia::render('Lesson/LessonEdit', ['id' => $id]);
    }

    /**
     * @param LessonStoreRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(LessonStoreRequest $request, $id): JsonResponse
    {
        $lesson = $this
            ->lessonService
            ->updateLesson($id, $request->all());

        return $this->response([
            'lesson' => $lesson
        ],
            'Update lesson by id',
            true,
            JsonResponse::HTTP_OK);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $delete = $this
            ->lessonService
            ->deleteLesson($id);

        return $this->response([
            'lesson_delete' => $delete
        ],
            'Delete lesson by id',
            true,
            JsonResponse::HTTP_OK);
    }

    /**
     * Return concrete lesson view by id
     * @param int $id
     * @return Response
     */
    public function lessonView(int $id)
    {
        return Inertia::render('Lesson/LessonView', ['id' => $id]);
    }
}
