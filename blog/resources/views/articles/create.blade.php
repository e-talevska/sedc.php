@extends('layouts.layout')

@section('title')
Create Article
@endsection

@section('content')
<h1>Create Article</h1>
{{ Form::open(['url' => url('article'), 'files' => true]) }}
@include('articles._form',['buttonText'=> 'Create Article'])
{{ Form::close() }}
@include('partials._errors')
@endsection