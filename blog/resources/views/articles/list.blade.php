<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>
<!-- //$article ke ni bide objekt od soodvetnata klasa ima id , content, title, --> 
@foreach ($articles as $article)
<h2>{{$article->title}}</h2>
<p>{{$article->content}}</p>

@endforeach

</body>
</html>