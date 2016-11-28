<html>
    <head>
        <title>About</title>
    </head>
    <body>
        <h2>About us {{$firstname}} {{$lastname}}</h2>
        @if(count($myteam))
        <h3>My team</h3>
        <ul>
            @foreach($myteam as $member)
            <li>
                {{$member}}
            </li>
            @endforeach
        </ul>
        @endif
    </body>
</html>
