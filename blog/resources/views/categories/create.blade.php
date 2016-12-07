@extends('layouts.layout')
@section('title')
Create Category
@endsection

@section('content')
<h1>Create Category</h1>
{{ Form::open(['url' => url('category')]) }}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
{{ Form::submit('Create',['class' => 'btn btn-primary']) }}
{{ Form::close() }}

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
@endsection
