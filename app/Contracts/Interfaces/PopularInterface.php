<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\ShowWithSlugInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface PopularInterface extends GetInterface, StoreInterface, UpdateInterface, ShowInterface, DeleteInterface, ShowWithSlugInterface
{
    public function getpopular() : mixed;
    public function getlatest(): mixed;
    public function getbycategory() :mixed;
}
