<?php
    
     define("HOSTNAME","localhost" );
     define("USERNAME","root");
     define("PASSWORD","06");
     define("DBNAME","property-stock");

     $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
     if (!$con) {
     	die("connecting failed");
     }else{
     	echo "connecting successfully";
     }
?>