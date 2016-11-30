@extends('layouts/layout')
@section('content')
	<h1 class="violet_color title">{{ $article->title }}</h1>
	<hr>
	<p>{{ $article->content }}</p>
@endsection
@section('title')
{{ $article->title }}
@endsection