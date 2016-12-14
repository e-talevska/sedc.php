<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'published_at',
        'category_id',
        'user_id',
        'image'
    ];
    
    public function author() {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function tags() {
        return $this->belongsToMany('App\Tag', 'article_tag', 'article_id');
    }
}
