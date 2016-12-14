@extends('layouts.frontend')


@section('content')

@foreach($articles as $article)

@if($article->image !='')
<a href="single.html">
<img src="/uploads/{{$article->image}}" class="img-responsive" alt="Feature image">
</a>
			<!-- <i class="aeroplane"> </i> -->
	<div class="travelling">
			<div class="col-md-10 travelling1">
				<h1><a href="single.html">{{$article->title}}</a></h1>
				<h5>by <a href="#">{{$article->author->name}}</a>{{date("d F Y",strtotime($article->published_at))}}<a href="#">{{$article->category['title']}}</a></h5>
				<p>{{$article->content}} </p>
			</div>
			<div class="col-md-1 travelling2">
				<h3>2</h3>
				<a href="#">comments</a>
			</div>
				<div class="clearfix"> </div>
	</div>
	@endif

	@endforeach


@endsection
