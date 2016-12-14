<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Catatan Si Boy a Bootstarp  Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="/css/style_template.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>				
</head>
<body>
<!-- header -->
	<div class="banner">
  	    <div class="container">
			<div class="logo">
				<a href="index.html"><img src="/images/logo.png" class="img-responsive" alt="" /></a>
			</div>
		</div> 
			<div class="header-bottom">
				<div class="container">
					<div class="head-nav">
						<span class="menu"> </span>
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="index.html">Categories</a></li>
								<div class="clearfix"> </div>
						</ul>
				</div>
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->		
					<div class="search-box">
				        <form>
				            <input type="text" name="s" class="textbox" value="search something" onfocus="this.value = '';" onblur="if
				                  	(this.value == '') {this.value = 'search something';}">
				            <input type="submit" value>
				        </form>
		            </div>
						<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- header -->
<!-- content -->
	<div class="container">
		<div class="content">

		
		@yield('content')
		
		</div>	
</div>
<!-- content -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
			<div class="social">
				<ul>
					<li><a href="#"><i class="fb"> </i></li></a>
					<li><a href="#"><i class="twt"> </i></li></a>
						<div class="clearfix"></div>
				</ul>
			</div>
		</div>
	</div>
<!-- footer -->
</body>
</html>