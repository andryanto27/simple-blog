<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Article extends Model implements Auditable{

    use SoftDeletes, \OwenIt\Auditing\Auditable;

    protected $dates = ['deleted_at'];
    protected $table = 'blog_articles';
    protected $fillable = [
        'user_id',
        'img_thumbnail',
        'title',
        'slug',
        'body',
        'is_publihsed',
        'published_at'
    ];

}