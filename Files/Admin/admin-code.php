<?php

    include_once '../signup-dbcon.php';

    $sql = "DELETE FROM account_details WHERE Email='" . $_GET["useremail"] . "'";
    if (mysqli_query($con, $sql)) {
        header("Location: admin-edit-users.php");
        exit; 
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
    
?>