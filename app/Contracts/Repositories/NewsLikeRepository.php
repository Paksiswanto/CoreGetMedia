<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\NewsLikeInterface;
use App\Models\NewsLike;

class NewsLikeRepository extends BaseRepository implements NewsLikeInterface
{
    public function __construct(NewsLike $newsLike)
    {
        $this->model = $newsLike;
    }

    /**
     * Handle show method and delete data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($user_id, $ip, $news): mixed
    {
        return $this->model->query()
            ->where('user_id', $user_id)
            ->where('ip_address', $ip)
            ->where('news_id', $news)
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
        //
    }

    public function where($news): mixed
    {
        return $this->model->query()
            ->where('news_id', $news)
            ->get();
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get($news_id): mixed
    {
        return $this->model->query()
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
