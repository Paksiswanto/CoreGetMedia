<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Models\Faq;
use App\Models\News;

class NewsRepository extends BaseRepository implements NewsInterface
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }

    /**
     * Handle show method and delete data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->model->query()
        ->findOrFail($id)
        ->delete();
    }

    /**
     * Handle get the specified data by id from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->where('user_id', $id)
            ->get();
    }

    public function showWithSLug(string $slug): mixed
    {
        return $this->model->query()
            ->where('slug', $slug)
            ->firstOrFail();
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
            ->get();
    }

    public function where($data): mixed
    {
        return $this->model->query()
            ->where('status', $data)
            ->get();
    }

    public function whereSubCategory($id, $query): mixed
    {
        return $this->model->query()
            ->whereRelation('newsSubCategories', 'sub_category_id', $id)
            ->withCount('newsViews')
            ->orderByDesc('news_views_count')
            ->when($query == 'top', function($q){
                $q->take(1);
            })
            ->get();
    }

    public function whereCategory($id, $query): mixed
    {
        return $this->model->query()
            ->whereRelation('newsCategories', 'category_id', $id)
            ->withCount('newsViews')
            ->orderByDesc('news_views_count')
            ->when($query == 'top', function($q){
                $q->take(1);
            })
            ->get();
    }

    public function categoryLatest() : mixed
    {
        return $this->model->query()
        ->latest()
        ->get();
    }


    /**
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }

    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->update($data);
    }

    // public function searchAll(Request $request): mixed
    // {
    //     return $this->model->query()

    //         ->where(function ($query) use ($request) {
    //             $query->where('name', 'LIKE', '%' . $request->search . '%')
    //                 ->orWhere('content', 'LIKE', '%' . $request->search . '%')
    //                 ->orWhereHas('user', function ($query) use ($request) {
    //                     $query->where('name', 'LIKE', '%' . $request->search . '%');
    //                 });
    //         })
    //         ->get();
    // }
}
