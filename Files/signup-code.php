<?php

include 'signup-dbcon.php';

    if(isset($_POST['submit'])){

        $username = $_POST['username']; 
        $email = $_POST['email'];  
        $password = $_POST['password']; 

        insertEmp($username, $email, $password, $con);
    
    }


function insertEmp($username, $email, $password, $con){

    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $insert = "INSERT INTO account_details (Username, Email, Password) VALUES ('$username', '$email', '$password')";

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