<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'image',
        'user_id',
        'description',
        'date',
        'status'
    ];

    protected $primaryKey = 'id';
    protected $table = 'news';

    public $incrementing = false;
    public $keyType = 'char';
    /**
     * Get the user that owns the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the comments for the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newsViews(): HasMany
    {
        return $this->hasMany(NewsView::class);
    }

    /**
     * Get all of the newsReports for the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newsReports(): HasMany
    {
        return $this->hasMany(NewsReport::class);
    }
}
