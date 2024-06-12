<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\NewsSubCategoryInterface;
use App\Contracts\Interfaces\NewsTagInterface;
use App\Contracts\Interfaces\SubCategoryInterface;
use App\Contracts\Interfaces\TagInterface;
use App\Enums\NewsEnum;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\NewsCategory;
use App\Services\NewsService;

class NewsController extends Controller
{
    private NewsInterface $news;
    private CategoryInterface $categories;
    private SubCategoryInterface $subcategories;
    private TagInterface $tags;

    private NewsCategoryInterface $newscategories;
    private NewsSubCategoryInterface $newssubcategories;
    private NewsTagInterface $newstags;

    private NewsService $service;

    public function __construct(NewsInterface $news, CategoryInterface $categories, SubCategoryInterface $subcategories, TagInterface $tags, NewsCategoryInterface $newscategories, NewsSubCategoryInterface $newssubcategories, NewsTagInterface $newstags, NewsService $service)
    {
        $this->news = $news;
        $this->categories = $categories;
        $this->subcategories = $subcategories;
        $this->tags = $tags;

        $this->newscategories = $newscategories;
        $this->newssubcategories = $newssubcategories;
        $this->newstags = $newstags;

        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $news = $this->news->show($user_id);
        return view('pages.author.news.list-news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categories->get();
        $tags = $this->tags->get();
        return view('pages.author.news.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        // dd($request);
        $data = $this->service->store($request);
        $newsId = $this->news->store($data)->id;
        $this->service->storeRelation($newsId, $data['category'], $data['sub_category'], $data['tag']);
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
    public function edit($news)
    {
        $news = $this->news->showWithSLug($news);
        $news_id = $news->id;

        $newsCategory = $this->newscategories->where($news_id);
        $newsSubcategory = $this->newssubcategories->where($news_id);
        $newsTags = $this->newstags->where($news_id);

        $categories = $this->categories->get();
        $subcategories = $this->subcategories->get();
        $tags = $this->tags->get();

        // dd($news->image);
        return view('pages.author.news.update', compact('news','categories', 'subcategories','tags', 'newsCategory', 'newsSubcategory', 'newsTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $this->service->update($request, $news);
        $data['status'] = NewsEnum::PENDING->value;
        $this->news->update($news->id, $data);
        $this->service->updateRelation($news->id, $data['category'], $data['sub_category'], $data['tag']);
        return back()->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $this->newscategories->delete($news->id);
        $this->newssubcategories->delete($news->id);
        $this->newstags->delete($news->id);
        $this->news->delete($news->id);
        return back()->with('success', 'Berhasil menghapus data');
    }

    public function navbar(Request $request){
        $categories = $this->categories->get();
        $subCategories = $this->subcategories->get();

        $news = $this->news->get();
        // $query = $request->input('search');
        // $newsSearch = $this->news->searchAll($request, $query);
        return view('layouts.user.navbar-header', compact('categories', 'subCategories','newsSearch'));
    }

    public function home(){
        $categories = $this->categories->get();
        $subCategories = $this->subcategories->get();
        return view('pages.index', compact('categories', 'subCategories'));
    }
    // public function showCategories($slug, Request $request, NewsCategory $newsCategory)
    // {
    //     $request->merge([
    //         'name' => $newsCategory->id,
    //     ]);

    //     $category = $this->category->showWithSlug($slug);
    //     $categoryId = $category->id;
    //     $subCategory = $this->subCategory->where($categoryId);

    //     $categories = $this->category->get();
    //     $totalCategories = $this->category->showWhithCount();
    //     $subCategories = $this->subCategory->get();
    //     $news = $this->news->showWhithCount();

    //     $query = $request->input('search');
    //     $newsCategories = $this->newsCategory->search($category->id, $query);

    //     $popular = $this->view->newsCategory($categoryId);

    //     $new_news = $this->news->newsCategorySearch($category->id, $query, 'terbaru', '5');
    //     $trending = $this->news->newsCategorySearch($category->id, $query, 'trending', '5');
    //     return view('pages.user.news.category', compact('trending','new_news','popular','news', 'totalCategories','subCategories','categories','category', 'subCategory', 'newsCategories'));
    // }
}
