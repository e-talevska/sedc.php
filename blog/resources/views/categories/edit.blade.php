@extends('layouts/layout') @section('title') Edit Category @endsection
@section('content')
<h1 class="violet_color title">Edit Category {{ $category->title }}</h1> <hr>
{{ Form::model($category, ['url' => url('/category/'.$category->id), 'method' => 'PUT']) }}
<div class="form-group">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
{{ Form::submit('Edit', ['class' => 'btn btn-default']) }}
{{ Form::close() }} @endsection
