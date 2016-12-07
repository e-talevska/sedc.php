@extends('layouts.layout')

@section('title')
{{ $article->title }}
@endsection

@section('content')
<article>
    <h2>{{ $article->title }}</h2>
    @if($article->image != '')
    <img src='/uploads/{{$article->image}}' alt="Feature image">
    <div class="content">{{ $article->content }}</div>
    @endif
</article>
@endsection