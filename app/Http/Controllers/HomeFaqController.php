<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\SubCategoryInterface;
use Illuminate\Http\Request;

class HomeFaqController extends Controller
{
    private FaqInterface $faqs;
    private CategoryInterface $categories;
    private SubCategoryInterface $subCategories;

    public function __construct(FaqInterface $faqs, CategoryInterface $categories, SubCategoryInterface $subCategories)
    {
        $this->faqs = $faqs;
        $this->categories = $categories;
        $this->subCategories = $subCategories;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = $this->faqs->get();
        $categories = $this->categories->get();
        $subCategories = $this->subCategories->get();
        return view('pages.user.faq.index', compact('faqs', 'categories', 'subCategories'));
    }
}
