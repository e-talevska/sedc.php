<?php

require 'functon.php';
var_dump($_GET);
$a= $b = 0;
if(isset($_GET['a'])){
   $a=(int)$_GET['a'];
   

//isto e tova cita string vo a i ja pretvara vo integer
    //$a=$_GET['a'];
   // settype($a, 'int');
}

if(isset($_GET['b'])){
    $b=(int)$_GET['b'];
}
	
?>



<?php
$title="including php files";
include 'header.php';


?>
<body>


<p>
	<?php

	echo"zbirot na $a i $b e " . zbir($a,$b); 

	?>

</p>

</body>
<?php

include 'footer.php';


?>
