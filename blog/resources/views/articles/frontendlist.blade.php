@extends('layouts.frontend')

@section('content')
@foreach($articles as $article)
<a href=single.html">
@if($article->image != '')
<img src='/uploads/{{ $article->image }}' class="img-responsive" >
@endif
</a>
			<!--<i class="aeroplane"> </i>-->
	<div class="travelling">
			<div class="col-md-10 travelling1">
				<h1><a href="single.html">Traveling to Cilacap Kota Cahaya</a></h1>
				<h5>by <a href="#">Samidi ,</a>{{date("d F Y", strtotime($article->published_at))}} ,<a href="#">{{ $article->category['title']}}</a></h5>
                                <p>{{substr($article->content, 200) }} </p>
			<div class="col-md-1 travelling2">
				<h3>2</h3>
				<a href="#">comments</a>
			</div>
				<div class="clearfix"> </div>
	</div>
                        
@endforeach                        
@endsection