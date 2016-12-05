@extends('layouts.layout')

@section('title')
Categories
@endsection

@section('content')
<h2 class="violet_color">Categories <a href="{{ url('category/create') }}"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h2>
<hr>
@foreach ($categories as $category)
    <article>
        <h4>
            {{ $category->title }} <a href="{{ url('category/'.$category->id.'/edit') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
        </h4>
    </article>
@endforeach
@endsection