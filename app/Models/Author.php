<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
