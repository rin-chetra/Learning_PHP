<?php
     $con = mysqli_connect("localhost","root","06","property-stock");
     if (!$con) {
     	die("connecting failed");
     }else{
     	echo "connecting successfully";
     }
?>