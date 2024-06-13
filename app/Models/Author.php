<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cv',
        'status'
    ];

    protected $primaryKey = 'id';
    protected $table = 'authors';

    public $incrementing = false;
    public $keyType = 'char';

    /**
     * Get the user that owns the Author
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
