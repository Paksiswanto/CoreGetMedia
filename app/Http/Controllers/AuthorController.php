<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AuthorInterface;
use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    private AuthorInterface $author;
    

    public function __construct(AuthorInterface $author)
    {
        $this->author = $author;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = $this->author->get();
        return view('pages.admin.author.confirm-author', compact('authors'));
    }

    public function list_author()
    {
        $authors = $this->author->where('accepted');
        return view('pages.admin.author.author-list', compact('authors'));
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
    public function store(StoreAuthorRequest $request)
    {
        $this->author->store($request->validates());
        return back()->with('success', 'Berhasil mendaftarkan diri');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('pages.user.author.detail-author', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $this->author->delete($author->id);
        return back()->wihh('success', 'Berhasil menghapus data');
    }

    public function landing()
    {
        $authors = $this->author->accepted();
        return view('pages.user.author.list-author', compact('authors'));
    }
}
