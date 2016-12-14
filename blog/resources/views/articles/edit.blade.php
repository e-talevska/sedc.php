@extends('layouts.layout')

@section('title')
Edit Article {{$article->title}}
@endsection

@section('content')
<h1>Edit Article {{$article->title}}</h1>
{{Form::model($article,['article'=> url('article/'. $article->id), 'method' => 'PUT', 'files' => true]) }}
@include('articles._form',['buttonText' => 'Update Article']);
{{Form::close()}}
@include('partials._errors')
@endsection

@include('partials._scripts')


