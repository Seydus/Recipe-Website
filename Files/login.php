<?php

  if(isset($_POST['submit'])){
        allow($_POST['username'], $_POST['password']);
    }else{  
        
    }

    function allow($username, $password){
        if($username == "admin" && $password == "1234"){
            header("Location: index.html");
            exit(); 
        }
    }

    
?>