<?php

namespace App\Services;

use App\Http\Requests\StoreSubCategoryRequest;
use Illuminate\Support\Str;

class SubCategoryService
{

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function storeOrUpdate(StoreSubCategoryRequest $request)
    {
        $data = $request->validated();

        return [
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
        ];
    }
}
