<?php

$host = "localhost";

$uname = "root"; //default user name of host
$pword = ""; //by default there is no password for localhost
$dbname = "website-signup";


//predefined function that connects to data base
//needs host, username, password, databse name
$con = mysqli_connect($host, $uname, $pword, $dbname); 


?>