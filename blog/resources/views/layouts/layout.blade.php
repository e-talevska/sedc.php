<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@yield('jscss')
</head>
<body>
<!-- //$article ke ni bide objekt od soodvetnata klasa ima id , content, title, --> 
<div class="container">

@yield('content')



</div>

</body>
</html>