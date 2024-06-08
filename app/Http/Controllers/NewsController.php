<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsInterface;
use App\Enums\NewsEnum;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Services\NewsService;

class NewsController extends Controller
{
    private NewsInterface $news;
    private NewsService $service;

    public function __construct(NewsInterface $news, NewsService $service)
    {
        $this->news = $news;
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
    public function store(StoreNewsRequest $request)
    {
        $data = $this->service->store($request);
        $this->news->store($data);
        return back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $this->service->update($request, $news);
        $data['status'] = NewsEnum::PENDING->value;
        $this->news->update($news->id, $data);
        return back()->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
