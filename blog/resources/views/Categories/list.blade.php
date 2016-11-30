@extends ('layouts/layout')
@section ('title')
Category
@endsection
@section ('content')
<h2 class="violet_color">Category <a href="{{url('category/create')}}"><i class="fa fa-plus-square" aria-hidden="true"></a></i>
</h2>
<hr>
      @foreach ($categories as $category)
      <article>
      <h2> 
   
          </h2>
          <h4>   <div class="category">{{$category->title}} <a href="{{url('category/'.$category->id.'/edit')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                  </a></div> </h4>
      </article>
      @endforeach
      @endsection