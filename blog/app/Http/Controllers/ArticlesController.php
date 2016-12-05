<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        // compact('articles');//compact e ista kako taa podole funkcija istoto go pravi kako kluc stava vrednost articles i bara promenlva so isto ime znaci u zagradata mora da bide ista so promenlivata pogore inace nema da funkcionira
        return view('articles.list',['articles'=>$articles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=\App\Category::lists('title','id');


        return view('articles.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $data['user_id']=1;
        $image=Input::file('image');//go zemame uploadiranio fajl
        $imageName=time() . '.' .$image->getClientOriginalExtension();//ekstenzijata zemahme jpg,png i i davamae ime so vreme brojki nekoi ..   
        $data['image']=$imageName;//toa upload vo baza pravime
        $image->move("uploads",$imageName);//stavi ja vo folderot uploads
       
        Article::create($data);
        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug tv jas si go mena bese int $id i so slug go smenig
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        
        $article=Article::where(['slug'=>$slug])->first();
        if(!isset($article)){
            return abort("404");
        }
        return view('articles.show',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article=Article::findOrFail($id);
        $categories=\App\Category::lists('title','id');


        return view('articles.edit',['categories'=>$categories,'article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article=Article::findOrFail($id);
        $data=$request->all();
        $data['user_id']=1;
        $image=Input::file('image');//go zemame uploadiranio fajl (procitaj)
        
        if (isset($image)) {
        $imageName=time() . '.' .$image->getClientOriginalExtension();//ekstenzijata zemahme jpg,png i i davamae ime so vreme brojki nekoi ..   
        $data['image']=$imageName;//toa upload vo baza pravime
        $image->move("uploads",$imageName);//stavi ja vo folderot uploads

        //sea starata ke ja brisame
        if ($article->image!='' &&  file_exists("uploads/ . $article->image")) {

            unlink("uploads/ . $article->image");
        }
    }

        $article->update($data);
        return redirect('article');



         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
