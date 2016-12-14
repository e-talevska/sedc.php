@extends('layouts/layout')
@section('content')
<article>
	<h1 class="violet_color title">{{ $article->title }}</h1>
	@if($article->tags()->exists())
	<p>
		@foreach ($article->tags as $tag)
			<span style="padding: 5px; margin:2px 5px; text-align: center; background-color: lightsteelblue; border: 1px solid black; border-radius: 5px;">{{ $tag->title }}&nbsp;</span>
		@endforeach
	</p>
	@endif
	<hr>
	@if($article->image != '')
	<img style="
		width:80%;
		margin: auto;
		display: block;
		margin-bottom: 20px;
	" src="/uploads/{{ $article->image }}" alt="{{ $article->title }}">
	@endif
	<p>{!! $article->content !!}</p>
	</article>
@endsection
@section('title')
{{ $article->title }}
@endsection