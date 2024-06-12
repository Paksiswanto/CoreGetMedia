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
    public function store($id, $news, $ip)
    {
        return [
            'news_id' => $news,
            'user_id' => $id,
            'ip_address' => $ip
        ];
    }
}
