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

    public function author(){

    	return $this->belongsTo('App\User','user_id');

    }
     public function category(){

        return $this->belongsTo('App\Category','category_id');

    }
    public function tags(){

        return $this->belongsToMany('App\Tag','article_tag');//i tuka moze posle article tag da se napisa foregn key od taa tabela
    }
    public function getTagListAttribute(){
        // return $this->tags()->lists('id')->toArray();
    }


}
