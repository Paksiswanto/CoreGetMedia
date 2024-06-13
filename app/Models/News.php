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
        'status',
        'pin'
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
     * Get all of the newsLikes for the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newsLikes(): HasMany
    {
        return $this->hasMany(NewsLike::class);
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

    /**
     * Get all of the newsCategories for the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newsCategories(): HasMany
    {
        return $this->hasMany(NewsCategory::class);
    }

    /**
     * Get all of the newsSubCategories for the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newsSubCategories(): HasMany
    {
        return $this->hasMany(NewsSubCategory::class);
    }

    /**
     * Get all of the comments for the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
