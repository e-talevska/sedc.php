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
    @if($article->tags()->exists())
    @endif
    <h5><strong><i>Tags</i></strong></h5>
    <ul>
    @foreach ($article->tags as $tag)
    <li>{{$tag->title}}</li>
    
    @endforeach
    </ul>
</article>
@endsection