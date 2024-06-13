<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreCommentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CommentService
{

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function store(StoreCommentRequest $request, $news_id, $ipAddress)
    {
        $data = $request->validated();

        $user_id = null;
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        }

        return [
            'news_id' => $news_id,
            'user_id' => $user_id,
            'ip_address' => $ipAddress,
            'description' => $data['description'],
        ];
    }
}
