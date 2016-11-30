@extends('layouts.layout')

@section('title')
{{ $article->title }}
@endsection

@section('content')
<article>
    <h2>{{ $article->title }}</h2>
    <div class="content">{{ $article->content }}</div>
</article>
@endsection