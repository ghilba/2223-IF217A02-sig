<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class News extends Model
{
    use HasFactory, Commentable;
    protected $guarded = ["id"];
}
