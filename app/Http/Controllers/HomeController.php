<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\PopularInterface;
use App\Contracts\Interfaces\SubCategoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private FaqInterface $faqs;
    private NewsInterface $news;
    private CategoryInterface $categories;
    private SubCategoryInterface $subCategories;
    private PopularInterface $populars;

    public function __construct(NewsInterface $news, FaqInterface $faqs, CategoryInterface $categories, SubCategoryInterface $subCategories, PopularInterface $populars)
    {
        $this->faqs = $faqs;
        $this->categories = $categories;
        $this->subCategories = $subCategories;
        $this->populars = $populars;
        $this->news = $news;
    }

    public function index(){
        $categories = $this->categories->get();
        $subCategories = $this->subCategories->get();
        $populars = $this->populars->getpopular();
        $categoryPopulars = $this->populars->getbycategory();
        return view('pages.index', compact('categories', 'subCategories', 'populars', 'categoryPopulars'));
    }

    public function navbar(Request $request){
        $categories = $this->categories->get();
        $subCategories = $this->subCategories->get();

        $news = $this->news->get();
        // $query = $request->input('search');
        // $newsSearch = $this->news->searchAll($request, $query);
        return view('layouts.user.navbar-header', compact('categories', 'subCategories','newsSearch'));
    }

    public function mobileHeader(){
        $categories = $this->categories->get();
        $subCategories = $this->subCategories->get();
        return view('layouts.user.mobile-navbar', compact('categories', 'subCategories'));
    }
}
