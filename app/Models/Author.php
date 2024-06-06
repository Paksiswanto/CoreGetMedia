<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
    ];

    protected $primaryKey = 'id';
    protected $table = 'authors';

    public $incrementing = false;
    public $keyType = 'char';
}
