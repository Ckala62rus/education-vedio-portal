<?php

namespace App\Http\Controllers;

use App\Contracts\LessonCategoryServiceInterface;
use App\Http\Requests\Admin\Dashboard\LessonCategory\LessonCategoryPaginationRequest;
use App\Http\Requests\Admin\Dashboard\LessonCategory\LessonCategoryStoreRequest;
use App\Http\Requests\Admin\Dashboard\LessonCategory\LessonCategoryUpdateRequest;
use App\Http\Resources\Admin\Dashboard\LessonCategory\LessonCategoryResource;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class LessonCategoryController extends BaseController
{
    /**
     * @var LessonCategoryServiceInterface
     */
    protected LessonCategoryServiceInterface $lessonCategoryService;

    /**
     * @param LessonCategoryServiceInterface $lessonCategoryService
     */
    public function __construct(LessonCategoryServiceInterface $lessonCategoryService)
    {
        $this->lessonCategoryService = $lessonCategoryService;
    }

    /**
     * return inertia vue page
     * @return Response
     */
    public function index()
    {
        return Inertia::render('LessonCategory/LessonCategoryIndex');
    }

    /**
     * return inertia vue page
     * @return Response
     */
    public function create()
    {
        return Inertia::render('LessonCategory/LessonCategoryCreate');
    }

    /**
     * Create new lesson category
     * @param LessonCategoryStoreRequest $request
     * @return JsonResponse
     */
    public function store(LessonCategoryStoreRequest $request): JsonResponse
    {
        $category = $this
            ->lessonCategoryService
            ->createLessonCategory($request->all());

        return $this->response(
            [
                'category' => $category
            ],
            'Category was create',
            true,
            ResponseAlias::HTTP_CREATED
        );
    }

    /**
     * Get lesson category by id
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $category = $this
            ->lessonCategoryService
            ->getLessonCategoryById($id);

        if (!$category) {
            return $this->response(
                [],
                'Category not found',
                false,
                ResponseAlias::HTTP_NOT_FOUND
            );
        }

        return $this->response(
            ['category' =>  $category],
            'Category by id=' . $id,
            true,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * return inertia vue page
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        return Inertia::render('LessonCategory/LessonCategoryEdit', ['id' => $id]);
    }

    /**
     * Update lesson category by id
     * @param LessonCategoryUpdateRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(LessonCategoryUpdateRequest $request, $id): JsonResponse
    {
        $category = $this
            ->lessonCategoryService
            ->updateLessonCategory($id, $request->all());

        return $this->response(
            ['category' =>  $category],
            'Update category by id=' . $id,
            true,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * Delete lesson category by id
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $isDelete = $this
            ->lessonCategoryService
            ->deleteLessonCategory($id);

        if ($isDelete){
            return $this->response(
                [],
                'Category was deleted with id=' . $id,
                true,
                ResponseAlias::HTTP_OK
            );
        }

        return $this->response(
            [],
            'Category was deleted with id=' . $id,
            false,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * Get all lesson category with pagination
     * @param LessonCategoryPaginationRequest $request
     * @return JsonResponse
     */
    public function getAllLessonCategoriesWithPagination(LessonCategoryPaginationRequest $request): JsonResponse
    {
        $categories = $this
            ->lessonCategoryService
            ->getAllLessonsCategoriesWithPagination($request->all()['limit']);

        return response()->json([
            'data' => LessonCategoryResource::collection($categories),
            'count' => $categories->total()
        ]);
    }

    /**
     * Get all lesson categories collection
     * @return JsonResponse
     */
    public function getAllLessonCategoryCollection(): JsonResponse
    {
        $categories = $this
            ->lessonCategoryService
            ->getAllLessonCategories();

        return $this->response(
            [
                'categories' => LessonCategoryResource::collection($categories)
            ],
            'Get all lesson categories',
            true,
            ResponseAlias::HTTP_OK
        );
    }
}
