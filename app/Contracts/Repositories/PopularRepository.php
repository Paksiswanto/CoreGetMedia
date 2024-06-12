<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\PopularInterface;
use App\Enums\NewsEnum;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Facades\DB;

class PopularRepository extends BaseRepository implements PopularInterface
{
    public function __construct(News $news , NewsCategory $newsCategory)
    {
        $this->model = $news;
        $this->newscategori = $newsCategory;
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

    public function getpopular(): mixed
    {
        return $this->model->query()
            ->where('status', NewsEnum::ACCEPTED->value)
            ->withCount('newsViews')
            ->get();
    }

    public function getlatest(): mixed
    {
        return $this->model->query()
            ->where('status', NewsEnum::ACCEPTED->value)
            ->withCount('newsViews')
            ->latest()
            ->get();
    }

    public function getbycategory(): mixed
    {
        // $subquery = $this->newscategori->query()
        //     ->selectRaw('category_id, COUNT(*) as category_count')
        //     ->groupBy('category_id')
        //     ->orderByRaw('COUNT(*) DESC')
        //     ->skip(1)
        //     ->take(1)
        //     ->pluck('category_id');

        return $this->model->query()
            ->where('status', NewsEnum::ACCEPTED->value)
            // ->whereHas('newsCategories', function ($query) use ($subquery) {
            //     $query->whereIn('category_id', $subquery);
            // })
            // ->with(['newsCategories' => function ($query) {
            //     $query->with('category');
            // }])
            ->withCount('newsCategories')
            ->orderByDesc('news_categories_count')
            ->orderBy('created_at')
            ->take(4)
            ->get();
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
}
