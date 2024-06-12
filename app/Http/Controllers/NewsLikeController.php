<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsLikeInterface;
use App\Models\NewsLike;
use App\Http\Requests\StoreNewsLikeRequest;
use App\Http\Requests\UpdateNewsLikeRequest;
use Illuminate\Http\Request;

class NewsLikeController extends Controller
{
    private NewsLikeInterface $newsLike;

    public function __construct(NewsLikeInterface $newsLike)
    {
        $this->newsLike = $newsLike;
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
    public function store(Request $request)
    {
        
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
    public function destroy(NewsLike $newsLike)
    {
        //
    }
}
