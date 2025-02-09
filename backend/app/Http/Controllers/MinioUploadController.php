<?php

namespace App\Http\Controllers;

use App\Contracts\MinioServiceInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MinioUploadController extends BaseController
{
    /**
     * MinioUploadController constructor.
     * @param MinioServiceInterface $minioService
     */
    public function __construct(
        private MinioServiceInterface $minioService,
    ){}

    /**
     * Upload file to minio S3 and return url
    * @param Request $request
    * @return JsonResponse
    */
    public function UploadFile(Request $request): JsonResponse
    {
        $files = $request->file('files');
        $savedFiles = [];

        foreach ($files as $file) {
            $savedFiles[] = $this
                ->minioService
                ->saveFile($file);
        }

        return  $this->response(
            data: $savedFiles,
            message: "Files uploaded",
            statusCode:  JsonResponse::HTTP_OK,
        );
    }

    /**
     * @param Request $request
     * @param string $filename
     * @return JsonResponse
     */
    public function getObjectByName(Request $request, string $filename): JsonResponse {
        $folder = $request->get('folder');

        $file = $this
            ->minioService
            ->getFileUrl($filename, $folder);

        return  $this->response(
            data: ['url' => $file],
            message: "Get file",
            statusCode:  JsonResponse::HTTP_OK,
        );
    }

    /**
     * Get all files
     * @param Request $request
     * @return JsonResponse
     */
    public function allFiles(Request $request): JsonResponse
    {
        $data = $request->all();
        $files = $this
            ->minioService
            ->getAllFiles($data['folder']);

        return  $this->response(
            data: ['files' => $files],
            message: "Get file",
            statusCode:  JsonResponse::HTTP_OK,
        );
    }
}
