<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\CreateAtCast;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body'
    ];
}
