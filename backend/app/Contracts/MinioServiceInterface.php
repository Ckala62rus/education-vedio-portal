<?php

namespace App\Contracts;

use Illuminate\Http\UploadedFile;

interface MinioServiceInterface
{
    public function saveFile(UploadedFile $file): string;
    public function getFileUrl(string $filename, string $folder): string|null;
    public function deleteFile(string $filename, string $folder): bool;
    public function getAllFiles(string $path): array|null;
}
