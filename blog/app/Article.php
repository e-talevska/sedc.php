<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	protected $fillable = [ 
			'title',
			'content',
			'slug',
			'published_at',
			'user_id',
			'category_id',
			'image'
	];
	public function author() {
		return $this->belongsTo('App\User', 'user_id');
	}
}
