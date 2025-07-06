<?php

namespace App\Http\Controllers;

use App\Contracts\CategoryVideoServiceInterface;
use App\Http\Requests\Admin\Dashboard\CategoryVideo\CategoryVideoPaginationRequest;
use App\Http\Requests\Admin\Dashboard\CategoryVideo\CategoryVideoStoreRequest;
use App\Http\Requests\Admin\Dashboard\CategoryVideo\CategoryVideoUpdateRequest;
use App\Http\Resources\Admin\Dashboard\CategoryVideo\CategoryVideoResource;
use App\Models\CategoryVideo;
use Illuminate\Support\Facades\Redis;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CategoryVideoController extends BaseController
{
    /**
     * @var CategoryVideoServiceInterface
     */
    protected CategoryVideoServiceInterface $categoryVideoService;

    /**
     * @param CategoryVideoServiceInterface $categoryVideoService
     */
    public function __construct(CategoryVideoServiceInterface $categoryVideoService)
    {
        $this->categoryVideoService = $categoryVideoService;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return Inertia::render('CategoryVideo/CategoryVideoIndex');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return Inertia::render('CategoryVideo/CategoryVideoCreate');
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryVideoStoreRequest $request
     * @return JsonResponse
     */
    public function store(CategoryVideoStoreRequest $request)
    {
        $category = $this
            ->categoryVideoService
            ->createCategoryVideo($request->validated());

        return $this->response(
            [
                'category' => $category
            ],
            'Category video was created',
            true,
            ResponseAlias::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        $category = $this
            ->categoryVideoService
            ->getCategoryVideoById($id);

        if (!$category) {
            return $this->response(
                [],
                'Category video not found',
                false,
                ResponseAlias::HTTP_NOT_FOUND
            );
        }

        return $this->response(
            ['category' => $category],
            'Category video by id=' . $id,
            true,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        return Inertia::render('CategoryVideo/CategoryVideoEdit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     * @param CategoryVideoUpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(CategoryVideoUpdateRequest $request, int $id)
    {
        $category = $this
            ->categoryVideoService
            ->updateCategoryVideo($id, $request->validated());

        return $this->response(
            ['category' => $category],
            'Category video updated by id=' . $id,
            true,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        $isDeleted = $this
            ->categoryVideoService
            ->deleteCategoryVideo($id);

        if ($isDeleted) {
            return $this->response(
                [],
                'Category video was deleted with id=' . $id,
                true,
                ResponseAlias::HTTP_OK
            );
        }

        return $this->response(
            [],
            'Failed to delete category video with id=' . $id,
            false,
            ResponseAlias::HTTP_INTERNAL_SERVER_ERROR
        );
    }

    /**
     * Get all category videos with pagination
     * @param CategoryVideoPaginationRequest $request
     * @return JsonResponse
     */
    public function getAllCategoryVideosWithPagination(CategoryVideoPaginationRequest $request): JsonResponse
    {
        $categories = Redis::get("category_videos:admin:{$request->page}");

        if ($categories == null) {
            $categories = $this
                ->categoryVideoService
                ->getAllCategoryVideoWithPagination($request->validated()['limit']);

            if ($categories) {
                // Cache for 60 seconds
                Redis::set("category_videos:admin:{$request->page}", $categories->toJson(), 'EX', 60);
            }

            return response()->json([
                'data' => CategoryVideoResource::collection($categories),
                'count' => $categories->total()
            ]);
        }

        $cacheDecoded = json_decode($categories, true);

        return response()->json([
            'data' => CategoryVideoResource::collection(CategoryVideo::hydrate($cacheDecoded['data'])),
            'count' => $cacheDecoded['total']
        ]);
    }

    /**
     * Get all category videos collection
     * @return JsonResponse
     */
    public function getAllCategoryVideoCollection(): JsonResponse
    {
        $categories = $this
            ->categoryVideoService
            ->getAllCategoryVideo();

        return response()->json([
            'data' => CategoryVideoResource::collection($categories)
        ]);
    }
}
