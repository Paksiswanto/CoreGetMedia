<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Facades\Auth;
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
            'user_id' => $id,
            'news_id' => $news,
            'ip_address' => $ip
        ];
    }
}
