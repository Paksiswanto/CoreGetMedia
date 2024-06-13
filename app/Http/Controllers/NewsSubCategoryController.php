<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\NewsSubCategoryInterface;
use App\Contracts\Interfaces\NewsTagInterface;
use App\Contracts\Interfaces\SubCategoryInterface;
use App\Contracts\Interfaces\TagInterface;
use App\Models\NewsSubCategory;
use App\Http\Requests\StoreNewsSubCategoryRequest;
use App\Http\Requests\UpdateNewsSubCategoryRequest;

class NewsSubCategoryController extends Controller
{
    private NewsCategoryInterface $newsCategory;
    private NewsSubCategoryInterface $newsSubCategory;
    private NewsInterface $news;
    private CategoryInterface $category;
    private SubCategoryInterface $subCategories;
    private TagInterface $tags;

    public function __construct(NewsSubCategoryInterface $newsSubCategory, TagInterface $tags, NewsCategoryInterface $newsCategory, NewsInterface $news, CategoryInterface $category, SubCategoryInterface $subCategories)
    {
        $this->newsSubCategory = $newsSubCategory;
        $this->newsCategory = $newsCategory;
        $this->category = $category;
        $this->subCategories = $subCategories;
        $this->news = $news;
        $this->tags = $tags;
    }

    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $subcategory = $this->subCategories->showWithSLug($slug);
        $subcategory_id = $subcategory->id;

        $categories = $this->category->get();
        $subCategories = $this->subCategories->get();

        $newsTop = $this->news->whereSubCategory($subcategory_id, 'top');
        $news = $this->news->whereSubCategory($subcategory_id, 'notop');
        $newsPopulars = $this->news->whereSubCategory($subcategory_id, 'notop');
        $popularCategory = $this->category->showWithCount();

        $populatTags = $this->tags->showWithCount();
        return view('pages.user.subcategory.index', compact('categories', 'subCategories', 'news', 'newsTop', 'popularCategory', 'newsPopulars'));
    }

    public function all_subcategory()
    {
        $categories = $this->category->get();
        $subCategories = $this->subCategories->get();

        $news = $this->newsSubCategory->get();
        $popularCategory = $this->category->showWithCount();
        return view('pages.user.subcategory.all-subcategory', compact('news','categories', 'subCategories', 'popularCategory'));
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
    public function store(StoreNewsSubCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsSubCategory $newsSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsSubCategory $newsSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsSubCategoryRequest $request, NewsSubCategory $newsSubCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsSubCategory $newsSubCategory)
    {
        //
    }
}
