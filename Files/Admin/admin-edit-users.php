<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>Tasty Trove</title>
  <link rel="shortcut icon" type="image/x-icon" href="_Pictures/logo.ico">
  <link href="style-admin-edit-users.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="header-box">
        <a href = "admin-index.html"><h2>Current Users</h2></a>
    </div>

    <table class = "table">
        <thead class = "thead-light">
            <tr>
                <th scope = "col">Username</th>
                <th scope = "col">First Name</th>
                <th scope = "col">Last name </th>
                <th scope = "col">Email</th>
                <th scope = "col">Delete User?</th>
            </tr>
        </thead>
        <tbody>

            <?php 

                include '../signup-dbcon.php';

                $getdata = "SELECT * FROM account_details"; 

                $result = mysqli_query($con, $getdata); 

                while($data = mysqli_fetch_assoc($result)){

                    if($data['Username'] == 'admin'){
                        echo "<tr>";
                        echo  "<th scope =\"row\">" .$data['Username']. "</th>"; 
                        echo "<td>" .$data['Fname'];
                        echo "<td>" .$data['Lname']; 
                        echo "<td>" .$data['Email']; 
                        echo "</tr>"; 
                    }else{

                        echo "<tr>";
                        echo  "<th scope =\"row\">" .$data['Username']. "</th>"; 
                        echo "<td>" .$data['Fname'];
                        echo "<td>" .$data['Lname']; 
                        echo "<td>" .$data['Email']; 
                        echo "<td><a href=\"admin-code.php?useremail=" . $data['Email'] . "\">Delete/Ban</a></td>";
                        echo "</tr>"; 

                    }



                }
        
            ?>

    <table>

</body>

</html>

