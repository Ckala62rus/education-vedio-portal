<?php

namespace App\Http\Controllers\Front;

use App\Contracts\LessonServiceInterface;
use App\Http\Controllers\BaseController;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class FrontController extends BaseController
{
    /**
     * @var LessonServiceInterface
     */
    private LessonServiceInterface $lessonService;

    /**
     * @param LessonServiceInterface $lessonService
     */
    public function __construct(LessonServiceInterface $lessonService)
    {
        $this->lessonService = $lessonService;
    }

    /**
     * Get view with all blogs
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $lessons = Lesson::paginate(1);

        return Inertia::render('Front/Index', ['lessons' => $lessons]);
    }

    /**
     * Get single post view
     * @param int $id
     * @return Response
     */
    public function post(int $id)
    {
        return Inertia::render('Front/SinglePost', ['id' => $id]);
    }

    /**
     * Get lesson by id
     * @param int $id
     * @return JsonResponse
     */
    public function singlePost(int $id): JsonResponse
    {
        $lesson = $this
            ->lessonService
            ->getLessonById($id);

        if(!$lesson) {
            return $this->response(
                [
                    'lesson' => null,
                ],
                'Get lesson by id:' . $id . ' not found',
                false,
                ResponseAlias::HTTP_OK
            );
        }

        return $this->response(
            [
                'lesson' => $lesson,
            ],
            'Get lesson by id',
            true,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * Get all lessons with pagination
     * @param Request $request
     * @return JsonResponse
     */
    public function getAllLessons(Request $request): JsonResponse
    {
        $data = $request->all();

//        $lessons = $this
//            ->lessonService
//            ->getAllLessonsPagination(1);

        $lessons = Lesson::paginate(2);

        return \response()->json(['lessons' => $lessons], ResponseAlias::HTTP_OK);
//        return \response()->json([
//            'data' => $lessons->collect(),
//            'count' => $lessons->total(),
//        ], ResponseAlias::HTTP_OK);
    }
}
