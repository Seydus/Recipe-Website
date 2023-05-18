<?php

//NEED TO DOWNLOAD THE DATABSE IN ORDER FOR THE SIGNUP AND LOGIN TO WORK
  if(isset($_POST['submit'])){
        allow($_POST['username'], $_POST['password']);
    }else{  
        
    }

    function allow($username, $password){
        
        include 'signup-dbcon.php';
    
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);


        if($username == 'admin' && $password == '1234'){
            header("Location: Admin/admin-index.html");
            exit;
        }

        $sql = "SELECT * FROM account_details WHERE Username = '$username' AND Password = '$password'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) == 1) {

            header("Location: index.html");
            exit();
        }
                
        mysqli_close($con);
    }

    
?>