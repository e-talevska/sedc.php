<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>

<?php

echo$lastname;

?>
<h2>About us {{$firstname}} {!!$lastname!!}  </h2>
<!-- <?php

// var_dump($myteam);

?> -->


@if(count($myteam))


<h3>My Team</h3>
<ul>
	
@foreach($myteam as $member)
	<li>{{$member}}</li>

@endforeach

</ul>

@endif
</body>
</html>