<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'address', 'price', 'open', 'detail', 'featured_image'];
}
