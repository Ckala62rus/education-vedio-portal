<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\JsonResponse;

class MinioUploadController extends BaseController
{
    /**
    // * @param Request $request
    // * @return JsonResponse
    // */
    public function UploadFile(Request $request): JsonResponse
    {
//        dd(123);
        $files = $request->file('files');

        $savedFiles = [];

        foreach ($files as $file) {
            /** @var UploadedFile $file */
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $res = Storage::disk('s3')
                ->putFileAs("images", $file, $fileName);
    //            ->put("images/{$fileName}", $file);
            $savedFiles[] = "http://minio:9000/api/" . $res;
    //            dump($res);
        }

        return  $this->response(
            data: $savedFiles,
            message: "Files uploaded",
            statusCode:  JsonResponse::HTTP_OK,
        );
    }
}
