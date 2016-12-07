@extends('layouts.layout')

@section('title')
Articles
@endsection

@section('content')
<h2 class="violet_color">Articles</h2>
<hr>
@foreach ($articles as $article)
    <article>
        <h2>
            <a href="{{url('article/' . $article->slug)}}">{{ $article->title }}</a>
        </h2>
        <div class="content">{{ $article->content }}</div>
    </article>
@endforeach
@endsection
