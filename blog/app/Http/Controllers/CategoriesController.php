<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

use App\Http\Requests;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category=Category::all();
        // compact('articles');//compact e ista kako taa podole funkcija istoto go pravi kako kluc stava vrednost articles i bara promenlva so isto ime znaci u zagradata mora da bide ista so promenlivata pogore inace nema da funkcionira
        return view('categories.list',['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('categories.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'title'=>'required|min:2'//za validacija od stranata nekoi si komandi so da pravat za nekoe pole primer mora da se popoli i minimum dva karakteri 
            ]);
        Category::create($request->all());
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('categories.edit',['category'=>$category]);
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
         $this->validate($request,[
                'title'=>'required|min:2'//za validacija od stranata nekoi si komandi so da pravat za nekoe pole primer mora da se popoli i minimum dva karakteri 
            ]);

        $category=Category::findOrFail($id);
        $category->update($request->all());
        return redirect('category');
        
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
