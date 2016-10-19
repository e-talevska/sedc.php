<?php
//$arr=['fdgdfgdgfdfg' , 'qweqwewqesdsdsdsd','wewewewwdwdwdz','wwesdwdwdwdw','wewewsdwwwwdwdwd','wdwdsdvvdss' ,'sdasdevrrrrrvsasdws'];



//if (isset($_GET['a'])) {
//	$a=$_GET['a'];
//	echo $arr[$a];
//}


    include 'array.php';

if(isset($_GET['id'])) {
                if(isset($data[ $_GET['id']  ])) {
                    echo "<p>{$data[ $_GET['id']  ]}</p>";
                }
            } else {
                
            }





?>