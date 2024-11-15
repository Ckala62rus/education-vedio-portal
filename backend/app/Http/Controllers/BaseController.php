<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;

class BaseController extends Controller
{
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Integration Swagger in Laravel with Bearer token",
     *      description="Implementation of Swagger with in Laravel",
     *      @OA\Contact(
     *          email="admin@admin.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Demo API Server"
     * )
     *
     * @OA\SecurityScheme(
     *      securityScheme="bearerAuth",
     *      type="http",
     *      scheme="bearer"
     * )
     */
    public function response(
        array $data,
        string $message = "",
        bool $status = true,
        int $statusCode = 200
    ): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}
