<?php

namespace App\Services;

use Exception;
use App\Models\Tag;
use App\Models\News;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use App\Enums\UploadDiskEnum;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NewsUpdateRequest;
use Intervention\Image\Laravel\Facades\Image;
use App\Http\Requests\Dashboard\Article\UpdateRequest;
use App\Base\Interfaces\uploads\CustomUploadValidation;
use App\Base\Interfaces\uploads\ShouldHandleFileUpload;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsService
{
    use UploadTrait;

    /**
     * Handle custom upload validation.
     *
     * @param string $disk
     * @param object $file
     * @param string|null $old_file
     * @return string
     */
    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);

        return $this->upload($disk, $file);
    }

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function store(StoreNewsRequest $request)
    {
        $data = $request->validated();
        $img = $this->compressImage($request->photo);

        $new_photo = $this->upload(UploadDiskEnum::NEWS->value, $img);

        $domQuestion = new \DOMDocument();
        libxml_use_internal_errors(true);
        $domQuestion->loadHTML($data['description'], LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        $this->processImages($domQuestion);

        libxml_clear_errors();

        return [
            'user_id' => auth()->user()->id,
            'name' => $data['name'],
            'image' => $new_photo,
            'description' => $domQuestion->saveHTML(),
            'slug' => Str::slug($data['name']),
            'date' => $data['date']
        ];
    }

        /**
     * Handle update data event to models.
     *
     * @param UpdateRequest $request
     * @param Article $article
     * @return array|bool
     */

    public function update(UpdateNewsRequest $request, News $news): array|bool
    {
        $data = $request->validated();

        $old_photo = $news->photo;
        $new_photo = "";

        if ($request->hasFile('photo')) {

            if (file_exists(public_path($old_photo))) {
                unlink(public_path($old_photo));
            }

            $img = $this->compressImage($request->photo);
            $new_photo = $this->upload(UploadDiskEnum::NEWS->value, $img);
            $news->photo = $new_photo;
        }

        $domQuestion = new \DOMDocument();
        libxml_use_internal_errors(true);
        $content = $data['content'] ?? '-';
        if (!$content) {
            $domQuestion->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            $this->processImages($domQuestion);
        }
        libxml_clear_errors();

        return [
            'user_id' => auth()->user()->id,
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'image' => $new_photo ? $new_photo : $old_photo,
            'description' => $data['description'],
            'date' => $data['date']
        ];
    }

    /**
     * Method processImages
     *
     * @param \DOMDocument $dom
     *
     * @return void
     */

    private function processImages(\DOMDocument $dom)
    {
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('#data:image/#', $src)) {
                preg_match('#data:image/(?<mime>.*?)\;#', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filepath = $fileNameContentRand . '.' . $mimetype;

                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $src));

                Storage::put(UploadDiskEnum::DESCRIPTION->value . '/' . $filepath, $imageData);

                $new_src = Storage::url(UploadDiskEnum::DESCRIPTION->value . '/' . $filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }
    }


    /**
     * Method compressImage
     *
     * @param $file as string
     *
     * @return UploadedFile
     */
    public function compressImage($file): UploadedFile
    {
        $imageInfo = getimagesize($file);
        $imageType = $imageInfo[2];

        switch ($imageType) {
            case IMAGETYPE_JPEG:
                $sourceImage = imagecreatefromjpeg($file);
                break;
            case IMAGETYPE_PNG:
                $sourceImage = imagecreatefrompng($file);
                break;
            default:
                throw new Exception('Unsupported image type');
        }

        $compressedImagePath = tempnam(sys_get_temp_dir(), 'compressed_image') . '.webp';
        imagewebp($sourceImage, $compressedImagePath, 80);
        imagedestroy($sourceImage);

        return new UploadedFile($compressedImagePath, basename($compressedImagePath), 'image/webp', null, true);
    }
}
