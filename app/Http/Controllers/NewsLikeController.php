<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsLikeInterface;
use App\Models\NewsLike;
use App\Http\Requests\StoreNewsLikeRequest;
use App\Http\Requests\UpdateNewsLikeRequest;
use App\Models\News;
use App\Services\NewsLikeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsLikeController extends Controller
{
    private NewsLikeInterface $newsLikes;
    private NewsLikeService $service;

    public function __construct(NewsLikeInterface $like, NewsLikeService $service)
    {
        $this->newsLikes = $like;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, News $news)
    {
        $ipAddress = $request->ip();
        $data =$this->service->store($news, $ipAddress);
        $this->newsLikes->store($data);
        return back()->with('success', 'Berhasil like berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsLike $newsLike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsLike $newsLike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsLikeRequest $request, NewsLike $newsLike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, NewsLike $newsLike, News $news)
    {
        $ipAddress = $request->ip();
        $user_id = "";
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        }
        $this->newsLikes->delete($user_id, $ipAddress, $news->id);
        return back()->with('success', 'Berhasil unlike berita');
    }
}
