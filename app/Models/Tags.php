<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $table = 'tags';

    /**
     * Get all of the newsTags for the Tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newsTags(): HasMany
    {
        return $this->hasMany(NewsTag::class);
    }

}


