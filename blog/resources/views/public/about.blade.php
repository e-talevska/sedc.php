<html>
    <head>
        <title>About</title>
    </head>
    <body>
        <h2>About Us {{ $firstname }} {!! $lastname !!} </h2>
        <h3>My Team
            <ul>
                
                @foreach ($myteam as $member) 
                <li> {{ $member }}</li>
                @endforeach
            </ul>
        
        
        </h3>
    </body>
</html>


