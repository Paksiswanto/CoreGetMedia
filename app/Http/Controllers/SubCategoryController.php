<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\SubCategoryInterface;
use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Category;

class SubCategoryController extends Controller
{
    private SubCategoryInterface $subCategories;

    public function __construct(SubCategoryInterface $subCategories)
    {
        $this->subCategories = $subCategories;
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
    public function store(StoreSubCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $data['category_id'] = $category->id;
        $this->subCategories->store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {
        $data = $request->validated();
        $this->subCategories->update($subCategory->id, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $this->subCategories->delete($subCategory->id);
    }
}
