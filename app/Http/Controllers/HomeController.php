<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\PopularInterface;
use App\Contracts\Interfaces\SubCategoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private FaqInterface $faqs;
    private CategoryInterface $categories;
    private SubCategoryInterface $subCategories;
    private PopularInterface $populars;

    public function __construct(FaqInterface $faqs, CategoryInterface $categories, SubCategoryInterface $subCategories, PopularInterface $populars)
    {
        $this->faqs = $faqs;
        $this->categories = $categories;
        $this->subCategories = $subCategories;
        $this->populars = $populars;
    }

    public function index(){
        $categories = $this->categories->get();
        $subCategories = $this->subCategories->get();
        $populars = $this->populars->getpopular();
        return view('pages.index', compact('categories', 'subCategories', 'populars'));
    }
}
