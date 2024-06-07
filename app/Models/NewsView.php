<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsView extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'news_id',
    ];

    protected $table = 'news_views';

    /**
     * Get the news that owns the NewsView
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }
}
