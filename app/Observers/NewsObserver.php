<?php

namespace App\Observers;

use App\Models\News;
use Faker\Provider\Uuid;

class NewsObserver
{
    /**
     * Handle the User "creating" event.
     *
     * @param User $user
     * @return void
     */
    public function creating(News $news): void
    {
        $news->id = Uuid::uuid();
    }
}
