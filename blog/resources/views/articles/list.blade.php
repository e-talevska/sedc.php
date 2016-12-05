<html>
    <head>
        <title>Articles</title>
    </head>
    <body>
        @foreach ($articles as $article)
        <h2>{{$article->title}}</h2>
        <p>{{$article->content}}</p>
        @endforeach

    </body>
</html>
