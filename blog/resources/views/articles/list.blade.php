@extends('layouts/layout')

@section('content')
<h2 class="violet_color">Articles&nbsp;<a href="{{ url('article/create') }}"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h2>
<hr>
@foreach ($articles as $article)
<article>
	<h2><a href="/article/{{ $article->slug }}">{{ $article->title }}</a>
	
	<a href="{{ url('article/' . $article->id . '/edit') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
	</h2>
	@if($article->tags()->exists())
	<p>
		@foreach ($article->tags as $tag)
			<span style="padding: 5px; margin:2px 5px; text-align: center; background-color: lightsteelblue; border: 1px solid black; border-radius: 5px;">{{ $tag->title }}&nbsp;</span>
		@endforeach
	</p>
	@endif
	<div class="content">{!! $article->content !!}</div>
</article>
@endforeach
<br>
@endsection

@section('title')
Articles
@endsection