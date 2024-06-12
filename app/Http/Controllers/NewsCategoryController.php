<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\SubCategoryInterface;
use App\Models\NewsCategory;
use App\Http\Requests\StoreNewsCategoryRequest;
use App\Http\Requests\UpdateNewsCategoryRequest;

class NewsCategoryController extends Controller
{
    private NewsCategoryInterface $newsCategory;
    private NewsInterface $news;
    private CategoryInterface $category;
    private SubCategoryInterface $subCategories;

    public function __construct(NewsCategoryInterface $newsCategory, NewsInterface $news, CategoryInterface $category, SubCategoryInterface $subCategories)
    {
        $this->newsCategory = $newsCategory;
        $this->category = $category;
        $this->subCategories = $subCategories;
        $this->news = $news;
    }
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $category = $this->category->showWithSLug($slug);
        $category_id = $category->id;

        $categories = $this->category->get();
        $subCategories = $this->subCategories->get();
        return view('pages.user.category.index', compact('categories', 'subCategories', 'category'));
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
    public function store(StoreNewsCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsCategory $newsCategory)
    {
        //
    }
}
