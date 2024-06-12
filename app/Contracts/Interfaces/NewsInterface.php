<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\ShowWithSlugInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface NewsInterface extends GetInterface, StoreInterface, UpdateInterface, ShowInterface, DeleteInterface, ShowWithSlugInterface
{
    // public function searchAll(Request $request) : mixed;
    public function where($data) : mixed;
    public function whereSubCategory($id, $query) : mixed;
}
