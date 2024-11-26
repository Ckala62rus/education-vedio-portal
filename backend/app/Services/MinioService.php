<?php

namespace App\Services;

use App\Contracts\MinioServiceInterface;
use GuzzleHttp\Exception\InvalidArgumentException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MinioService implements MinioServiceInterface
{
    const VIDEOS_MIME = [
        'video/mp4' => 'mp4',
        'video/mpeg' => 'mpeg',
        'video/webm' => 'webm',
    ];
    const IMAGES_MIME = [
        'video/webm' => 'webm',
        'image/bmp' => 'bmp',
        'image/jpeg' => 'jpeg',
        'image/png' => 'png',
        'image/svg+xml' => 'svg',
        'image/webp' => 'webp',
    ];
    const OTHER = [];

    const IMAGES = 'images';
    const VIDEOS = 'videos';

    /**
     * Get folder via mime type file
     * @param string $mimeType
     * @return string
     */
    private function getFolderFromMime(string $mimeType): string
    {
        if(array_key_exists($mimeType, MinioService::IMAGES_MIME)) {
            return MinioService::IMAGES;
        }
        if(array_key_exists($mimeType, MinioService::VIDEOS_MIME)) {
            return MinioService::VIDEOS;
        }
        throw new InvalidArgumentException('Unknown mime type');
    }

    /**
     * Save file and return URL file to S3
     * @param UploadedFile $file
     * @return string
     */
    public function saveFile(UploadedFile $file): string
    {
        $folderToSave = $this->getFolderFromMime($file->getMimeType());
        $minioUrl = env("APP_URL");
        $fileName =  Str::uuid() . '.' . $file->getClientOriginalExtension();

        $res = Storage::disk('s3')
            ->putFileAs($folderToSave, $file, $fileName);
        return $minioUrl . "/api/" . $res;
    }

    /**
     * Get file URL by filename and folder from S3
     * @param string $filename
     * @param string $folder
     * @return string
     */
    public function getFileUrl(string $filename, string $folder): string
    {
        // TODO: Implement getFileUrl() method.
    }

    /**
     * Delete file by filename and folder from S3
     * @param string $filename
     * @param string $folder
     * @return bool
     */
    public function deleteFile(string $filename, string $folder): bool
    {
        // TODO: Implement deleteFile() method.
    }
}
