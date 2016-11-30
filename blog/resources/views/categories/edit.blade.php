@extends('layouts.layout')

@section('title')
Edit Category {{$category->title}}
@endsection


@section('content')

	<h1>Edit Category {{$category->title}}</h1>
{{Form::model($category,['url'=>url('category/'. $category->id),'method'=>'PUT']) }}

	<div class="form-group">
	{{Form::label('title','Title')}}
		{{Form::text('title',null,['class'=>'form-control'])  }}


	</div>
	{{Form::submit('Edit',['class'=>'btn btn-primary'])}}
	
	
	
	
{{Form::close()}}


@endsection