<!DOCTYPE html>
<html>
<head>
<title>About</title>
</head>
<body>
	<h2>About us! {{ $name }} {!! $lastname !!}</h2>
	<h3>My team</h3>
	<ul>
		@foreach($myteam as $member)
		<li>{{ $member }}</li> @endforeach
	</ul>
</body>
</html>