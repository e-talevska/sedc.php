<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	function __construct () {
		$this->middleware('auth', ['except' => 'index']);
	}

	public function index() {
		$articles = Article::all ();
		return view ( 'articles.list', [ 
				'articles' => $articles 
		] );
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$categories = \App\Category::pluck ( 'title', 'id' );
		return view ( 'articles/create', [ 
				'categories' => $categories 
		] );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @return \Illuminate\Http\Response
	 */
	public function store(ArticleRequest $request) {
		// var_dump(Auth::user());
		// $data = $request->all ();
		// $data ['user_id'] = Auth::user()->id;
		// $image = Input::file ( 'image' );
		// if(isset($image)) {
		// 	$image_name = time () . '.' . $image->getClientOriginalExtension ();
			
		// 	$data ['image'] = $image_name;
		// 	$image->move ( 'uploads', $image_name );
		// } else {
		// 	$data['image'] = '';
		// }
		// // var_dump($image_name);
		// // exit ();
		// Article::create ( $data );

		$data = $request->all();
		$image = Input::file ( 'image' );
		if(isset($image)) {
			$image_name = time () . '.' . $image->getClientOriginalExtension ();
			
			$data ['image'] = $image_name;
			$image->move ( 'uploads', $image_name );
		} else {
			$data['image'] = '';
		}
		Auth::user()->articles()->save(new Article($data));
		return redirect ( 'article' );
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param string $slug        	
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug) {
		$article = Article::where ( [ 
				'slug' => $slug 
		] )->first ();
		if (! isset ( $article ))
			return abort ( 404 );
		return view ( 'articles/show', [ 
				'article' => $article 
		] );
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$article = Article::findOrFail ( $id );
		$categories = \App\Category::pluck ( 'title', 'id' );
		return view ( 'articles/edit', [ 
				'categories' => $categories,
				'article' => $article 
		] );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function update(ArticleRequest $request, $id) {
		$article = Article::findOrFail ( $id );
		$data = $request->all ();
		$data ['user_id'] = Auth::user()->id;
		
		$image = Input::file ( 'image' );
		if (isset ( $image )) {
			$image_name = time () . '.' . $image->getClientOriginalExtension ();
			$data ['image'] = $image_name;
			$image->move ( 'uploads', $image_name );
			
			if ($article->image != '' && file_exists ( 'uploads/' . $article->image )) {
				unlink ( 'uploads/' . $article->image );
			}
		}
		
		$article->update ( $data );
		return redirect('article');
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
