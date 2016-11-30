@extends('layouts/layout') @section('title') Create Category @endsection
@section('content')
<h1 class="violet_color title">Create Category</h1> <hr>
{{ Form::open(['url' => url('category')]) }}
<div class="form-group">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
{{ Form::submit('Create', ['class' => 'btn btn-default']) }}
{{ Form::close() }} @endsection
