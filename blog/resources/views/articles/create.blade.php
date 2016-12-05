@extends('layouts.layout')

@section('title')
Create Article
@endsection

@section('content')
<h1>Create Article</h1>
{{ Form::open(['url' => url('article'), 'files' => true]) }}
<div class='form-group'>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('content', 'Content') }}
    {{ Form::textarea('content', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('image', 'Feature Image') }}
    {{ Form::file('image', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('category_id', 'Category') }}
    {{ Form::select('category_id', $categories , null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('published_at', 'Published at') }}
    {{ Form::text('published_at', null, ['class' => 'form-control']) }}
</div>
{{ Form::submit('Create Article',['class' => 'btn btn-primary']) }}
{{ Form::close() }}
@endsection