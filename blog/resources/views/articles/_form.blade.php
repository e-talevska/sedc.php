<div class='form-group'>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('content', 'Content') }}
    {{ Form::textarea('content', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('image', 'Feature Image') }}
    {{ Form::file('image', null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
    {{ Form::label('category_id', 'Category') }}
    {{ Form::select('category_id', $categories , null, ['class' => 'form-control']) }}
</div>
<div class='form-group'>
/*
//<<<<<<< stefan_ristevski
//=======
  //  {{ Form::label('tag', 'Tag') }}
 //   {{ Form::select('tag[]', $tags , null, ['id' => 'tag',   'class' => 'form-control', 'multiple']) }}
//</div>
//<div class='form-group'  style="position:relative;">
//>>>>>>> master */
    {{ Form::label('published_at', 'Published at') }}
    {{ Form::text('published_at', null, ['class' => 'form-control']) }}
</div>
{{ Form::submit($buttonText,['class' => 'btn btn-primary']) }}