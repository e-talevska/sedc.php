<?php

include('array.php');


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<p>
<a href="tose.php?a=1">eden link</a><br>
<a href="tose.php?a=2">vtor link</a><br>
<a href="tose.php?a=3">tret link</a><br>
<a href="tose.php?a=4">cetvrt link</a><br>
<a href="tose.php?a=5">pet link</a><br>
<a href="tose.php?a=6">sest link</a><br>
<a href="tose.php?a=7">sedum link</a><br>
</p>

 



<?php
		$keys= array_keys($data);
		foreach ($keys as $key) { ?>
		
		<a href="tose.php?id=<?php echo$key; ?>">Articles <?php  echo$key+1; ?> </a><br>

	<?php
	
	}


?>



</body>
</html>