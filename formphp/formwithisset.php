<?php
     if (isset ($_POST ['username']) && isset($_POST['password'])){
     	 $user = $_POST ['username'];
         $pass = $_POST ['password'];

         echo "username : {$user} <br/>";
         echo "password : {$pass}";
     }else{
     	echo "You must Login";
    }
    
?>