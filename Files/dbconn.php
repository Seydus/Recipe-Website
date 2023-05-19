<?php

$host = "localhost";
$uname = "root"; //default user name of host
$pword = ""; //by default there is no password for localhost
$dbname = "database";

//predefined function that connects to data base
//needs host, username, password, databse name
$conn = mysqli_connect($host, $uname, $pword, $dbname); 

if(!$conn)
{
    die("Connection Failed");
}
else
{
    echo "Connection Established!<br><br>";
}

