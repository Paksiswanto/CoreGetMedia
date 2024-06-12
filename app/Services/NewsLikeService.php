<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Str;

class NewsLikeService
{

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();

        return [
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
        ];
    }
}
