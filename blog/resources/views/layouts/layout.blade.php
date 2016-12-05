<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title') | Blog</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		
		@yield('content')
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</body>
</html>