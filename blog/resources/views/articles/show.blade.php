@extends('layouts.layout')

@section('title')
{{ $article->title }}
@endsection

@section('content')
<article>
    <h2>{{ $article->title }}</h2>
    @if($article->image != '')
    <img src='/uploads/{{ $article->image }}' alt="Feature image" >
    @endif
    <div class="content">{{ $article->content }}</div>
//<<<<<<< stefan_ristevski
//=======
   // @if($article->tags()->exists())
      //  <h3>Tags</h3>
       // <ul>
        //    @foreach($article->tags as $tag)
         //   <li>{{ $tag->title }}</li>
         //   @endforeach
      //  </ul>
   // @endif
//>>>>>>> master
//</article>
//@endsection