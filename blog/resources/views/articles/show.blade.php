@extends('layouts/layout')
@section('content')
<article>
	<h1 class="violet_color title">{{ $article->title }}</h1>
	<hr>
	@if($article->image != '')
	<img style="
		width:80%;
		margin: auto;
		display: block;
		margin-bottom: 20px;
	" src="/uploads/{{ $article->image }}" alt="{{ $article->title }}">
	@endif
	<p>{{ $article->content }}</p>
	</article>
@endsection
@section('title')
{{ $article->title }}
@endsection