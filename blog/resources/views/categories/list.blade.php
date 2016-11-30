@extends('layouts/layout')

@section('title')

Category

@endsection

@section('content')

<h2 class="color">Categories  <a href="{{url('category/create')}}"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h2>
<hr>

@foreach ($category as $cat)

<article>


<h4>{{$cat->title}} <a href="{{url('category/'. $cat->id .'/edit')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></h4>
	
</article>

@endforeach

@endsection
