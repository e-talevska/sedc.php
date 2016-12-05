@extends ('layouts/layout')

@section ('title')

Edit Article {{ $article->title }}

@endsection

@section('content')

<h1>Edit Article {{ $article->title }}</h1>
{{ Form::model($article, ['url' => url('article/' . $article->id), 'method' => 'PUT', 'files' => true]) }}

<div class="form-group">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('content', 'Content') }}
	{{ Form::textarea('content', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'Slug') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('published_at', 'Published at') }}
	{{ Form::text('published_at', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('category_id', 'Category') }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('image', 'Feature Image') }}
	{{ Form::file('image', null, ['class' => 'form-control']) }}
</div>
{{ Form:: submit('Create Article', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}
@endsection