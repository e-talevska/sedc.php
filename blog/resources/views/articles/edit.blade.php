@extends('layouts.layout')

@section('title')
Edit Article {{$article->title}}
@endsection

@section('content')
<h1>Edit Article {{$article->title}}</h1>
{{ Form::model($article, ['url' => url('article/' . $article->id), 'method' => 'PUT' , 'files' => true]) }}
//<<<<<<< stefan_ristevski
//@include('articles._form',['buttonText' => 'Edit Article'])
//{{ Form::close() }}
//@include('partials._errors')
//@endsection
//=======
//@include('articles._form',['buttonText' => 'Update Article'])
//{{ Form::close() }}
//@include('partials._errors')
//@endsection

//@include('partials._scripts')
//>>>>>>> master 
