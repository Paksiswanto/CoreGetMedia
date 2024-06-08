<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Str;

class CategoryService
{

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function storeOrUpdate(StoreCategoryRequest $request)
    {
        $data = $request->validated();

        return [
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
        ];
    }
}
