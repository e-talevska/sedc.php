<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//model sto go kreirahme preku gitbas
class Article extends Model
{
    protected $fillable=[
    	'title',
    	'content',
    	'slug',
    	'published_at',
    	'category_id',
    	'user_id',
    	'image'


    ];
}
