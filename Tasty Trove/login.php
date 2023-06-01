<?php
session_start();
include 'dbconn.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>Log in</title>
  <link rel="shortcut icon" type="image/x-icon" href="_Pictures/logo.ico">
  <link href="style-login.css" rel="stylesheet" type="text/css" />
</head>

<header class="main-header" id="main-header-id">
  <div class="wrapper">
    <div class="sidebar">
      <div class="profile">
        <img src="https://media.tenor.com/NICoVNbKVGYAAAAM/profile-picture.gif" alt="Profile Picture">
        <h3>Olajide Olayinka Williams Olatunji</h3>
      </div>
      <ul>
        <li>
          <a href="index.php">
            <span class="item">Home</span>
          </a>
        </li>
        <li>
          <a href="list-of-categories.php">
            <span class="item">Categories</span>
          </a>
        </li>
        <li>
          <a href="about-us.php">
            <span class="item">About Us</span>
          </a>
        </li>
        <li>
          <a href="login.php" class="active">
            <span class="item">Log In</span>
          </a>
        </li>
        <li>
          <a href="signup.php">
            <span class="item"><b>Sign Up</b></span>
          </a>
        </li>
      </ul>
    </div>
    <div class="section">
      <div class="top-navbar">
        <div class="hamburger">
          <a class="hamburger-icon" style="cursor: pointer">
            <img src="_Pictures/hamburger-menu.png" style="height: 20px">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main-header-title">
    <a href="index.html" style="text-decoration: none; color: black">
      <h2>Tasty Trove</h2>
    </a>
  </div>
  <div class="main-header-search">
    <form class="search-bar" action="/search">
      <input name="given-search-input" type="text" required="required" placeholder="Search...">
      <a href="index.html">
        <img src="_Pictures/search-icon.png" alt="search-icon">
      </a>
    </form>
  </div>
</header>

<div class="body"></div>
<div class="header">

</div><br>
<div class="login">
  <div class="login-container">
    <form method="POST" action="">
      <input type="text" placeholder="username" name="username"><br>
      <input type="password" placeholder="password" name="password"><br>
      <input type="submit" value="Login" name="submit">
    </form>

  </div>
</div>

<script src="app.js"></script>

</html>

<?php

if (isset($_POST['submit'])) 
{
    allow($_POST['username'], $_POST['password']);
} 

function allow($username, $password)
{
    include 'dbconn.php';

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM account_details WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $userData = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $userData['ID'];
        header("Location: index.php");
        exit();
    }

    mysqli_close($conn);
}

?>
