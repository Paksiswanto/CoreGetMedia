<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class CompressingImage
{
    /**
     * Process image compressing and store the compressed image
     *
     * @param string $fileName
     * @param UploadedFile $request
     * @param string $targetPath
     * @param array $options
     * @return array
     */
    public static function process($fileName, UploadedFile $request, string $targetPath, array $options = [])
    {
        $number = 1;
        $fileName = $options['name'] ?? $fileName . $number++;
        $originalFileExt = $request->getClientOriginalExtension();

        // Validate image extension
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array(strtolower($originalFileExt), $allowedExtensions)) {
            throw new \InvalidArgumentException('Invalid file extension. Only JPG, JPEG, PNG, and GIF are allowed.');
        }

        $uploadImage = $request->storeAs("{$targetPath}", "{$fileName}.{$originalFileExt}");
        $compressTargetImage = str_replace('/', DIRECTORY_SEPARATOR, storage_path('app/public/'.$uploadImage));

        $options['targetPath'] = $targetPath;
        $options['name'] = $fileName;
        $options['extension'] = $originalFileExt;
        $options['original_uploaded_file'] = $compressTargetImage;

        $compressResult = self::processCompressImage($compressTargetImage, $options);

        return array_merge($compressResult, $options);
    }

    /**
     * Process image compression
     *
     * @param string $imagePath
     * @param array $options
     * @return array
     */
    public static function processCompressImage(string $imagePath, array $options = [])
    {
        $imageInfo = self::getFileInfo($imagePath);

        if (!$imageInfo) {
            throw new \RuntimeException('Failed to get image information.');
        }

        $imageLayer = null;
        switch ($imageInfo['mime']) {
            case 'image/gif':
                $imageLayer = imagecreatefromgif($imagePath);
                break;
            case 'image/jpeg':
                $imageLayer = imagecreatefromjpeg($imagePath);
                break;
            case 'image/png':
                $imageLayer = imagecreatefrompng($imagePath);
                break;
            default:
                throw new \RuntimeException('Unsupported image format.');
        }

        $filename = "{$options['targetPath']}/{$options['name']}.webp";
        $filePath = public_path("storage/{$filename}");

        if (!imagewebp($imageLayer, $filePath, $options['quality'] ?? 50)) {
            throw new \RuntimeException('Failed to compress image.');
        }

        if (!isset($options['duplicate']) || !$options['duplicate']) {
            unlink($options['original_uploaded_file']);
            $files = $filename;
        } else {
            $filenameOriginal = "{$options['targetPath']}/{$options['name']}.jpg";
            $filePathOriginal = public_path("storage/{$filenameOriginal}");
            if (!imagejpeg($imageLayer, $filePathOriginal, $options['quality'] ?? 50)) {
                throw new \RuntimeException('Failed to duplicate image.');
            }

            $files = [$filename, $filenameOriginal];
        }

        return ['files' => $files];
    }

    /**
     * Get file information
     *
     * @param string $imagePath
     * @return array|false
     */
    public static function getFileInfo(string $imagePath)
    {
        return getimagesize($imagePath);
    }
}
