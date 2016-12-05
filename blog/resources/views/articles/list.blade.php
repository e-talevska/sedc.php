@extends('layouts/layout')

@section('content')
<h2 class="violet_color">Articles&nbsp;<a href="{{ url('article/create') }}"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h2>
<hr>
@foreach ($articles as $article)
<article>
	<h2><a href="/article/{{ $article->slug }}">{{ $article->title }}</a>
	
	<a href="{{ url('article/' . $article->id . '/edit') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
	</h2>
	<div class="content">{{ $article->content }}</div>
</article>
@endforeach

@endsection

@section('title')
Articles
@endsection