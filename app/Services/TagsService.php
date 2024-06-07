<?php

namespace App\Services;

use App\Http\Requests\StoreTagsRequest;
use Illuminate\Support\Str;

class TagsService
{

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function storeOrUpdate(StoreTagsRequest $request)
    {
        $data = $request->validated();

        return [
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
        ];
    }
}
