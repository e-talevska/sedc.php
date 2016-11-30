@extends('layouts/layout') @section('title') Categories @endsection
@section('content')
<h1 class="violet_color title">
	<strong>Categories</strong>&nbsp;<a href="/category/create"><i
		class="fa fa-plus-square" style="font-size: inherit"
		aria-hidden="true"></i> </a>
</h1>
<hr>
@foreach ($categories as $c)
<article>
	<h3>
		{{ $c->title }}&nbsp;<a href="{{ url('/category/'.$c->id.'/edit') }}"><i class="fa fa-pencil-square"
			aria-hidden="true"></i></a>
	</h3>
</article>
@endforeach @endsection
