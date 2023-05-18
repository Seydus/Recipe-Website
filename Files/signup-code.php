<?php

include 'signup-dbcon.php';

    if(isset($_POST['submit'])){

        $username = $_POST['username']; 
        $fname = $_POST['fname'];
        $lname = $_POST['lname']; 
        $email = $_POST['email'];  
        $password = $_POST['password']; 

        insertEmp($username, $fname, $lname, $email, $password, $con);
    
    }


function insertEmp($username, $fname, $lname, $email, $password, $con){

    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $insert = "INSERT INTO account_details (Username, Fname, Lname, Email, Password) VALUES ('$username', '$fname', '$lname', '$email', '$password')";

        if(mysqli_query($con, $insert)){
            header("Location: login-page.php"); 
            exit; 
        } else{
            echo "Failed to insert employee".mysqli_error($con); 
        }
    }else{
        header("Location: signup-page.php");
        exit; 
    }

}



?>