<?php

$server ="localhost";
$username = "root";
$password="";
$db = "yesbank";


$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn){
    echo "Server connection failed due to -->" .mysqli_connect_error();
}


?>