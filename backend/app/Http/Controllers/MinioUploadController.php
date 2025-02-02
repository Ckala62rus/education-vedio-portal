<?php

namespace App\Http\Controllers;

use App\Contracts\MinioServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
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
     * @return JsonResponse
     */
    public function getObjectByName(Request $request): JsonResponse {
        $files = $request->file('files');
        $bucket = $request->get("bucket");

        $uploadFiles = [];

        foreach ($files as $file) {
            /** @var UploadedFile $file */
            $fileName = time() . '.' . $file->getClientOriginalExtension();

            $minioUrl = env("APP_URL");
            $bucket = env("AWS_BUCKET");

            $uploadFiles[] = $minioUrl . '/' . Storage::disk('s3')
                ->putFileAs($bucket, $file, $fileName);
        }

        return  $this->response(
            data: $uploadFiles,
            message: "Files uploaded",
            statusCode:  JsonResponse::HTTP_OK,
        );
    }
}
