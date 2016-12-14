<?php

namespace App\Http\Controllers;






use App\Article;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use Request;
class ArticlesController extends Controller
{

    function __construct(){

        $this->middleware('auth',['except'=>'index']);


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segment1=Request::segment(1);
        if ($segment1=='admin') {
            
        
        $articles=Article::all();
        // compact('articles');//compact e ista kako taa podole funkcija istoto go pravi kako kluc stava vrednost articles i bara promenlva so isto ime znaci u zagradata mora da bide ista so promenlivata pogore inace nema da funkcionira
        return view('articles.list',['articles'=>$articles]);
            }else{
                $articles=Article::all();
                return view ('articles.frontendlist',['articles'=>$articles]);
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=\App\Category::lists('title','id');
        $tags=\App\Tag::lists('title','id');


        return view('articles.create',['categories'=>$categories],['tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        // var_dump(\Illuminate\Support\Facades\Auth::user());exit;
       //  $data=$request->all();
       //  $data['user_id']=Auth::user()->id;
       //  $image=Input::file('image');//go zemame uploadiranio fajl
       //  if (isset($image)) {
            
        
       //  $imageName=time() . '.' .$image->getClientOriginalExtension();//ekstenzijata zemahme jpg,png i i davamae ime so vreme brojki nekoi ..   
       //  $data['image']=$imageName;//toa upload vo baza pravime
       //  $image->move("uploads",$imageName);//stavi ja vo folderot uploads
       // }else{
       //  $data['image']='';

       // }
       //  Article::create($data);

        // var_dump($request->all());exit;

        $data=$request->all();
        $image=Input::file('image');//go zemame uploadiranio fajl
        if (isset($image)) {
            
        
        $imageName=time() . '.' .$image->getClientOriginalExtension();//ekstenzijata zemahme jpg,png i i davamae ime so vreme brojki nekoi ..   
        $data['image']=$imageName;//toa upload vo baza pravime
        $image->move("uploads",$imageName);//stavi ja vo folderot uploads
       }else{
        $data['image']='';

       }

        $article=Auth::user()->articles()->save(new Article($data));
        if ($request->input('tag')!=null) {
        $article->tags()->attach($request->input('tag_list'));
}
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

        $tags=\App\Tag::lists('title','id');


        return view('articles.edit',['categories'=>$categories,'article'=>$article,'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
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
        $tags=$request->input('tag_list');
        if ($request->input('tag_list')!==null) {
            $tags=[];
        $article->tags()->sync($request->input('tag_list'));
    }
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
