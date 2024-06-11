<?php

namespace App\Contracts\Interfaces\Eloquent;

interface ShowWithSlugInterface
{
    /**
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */

    public function showWithSLug(string $slug): mixed;
}
