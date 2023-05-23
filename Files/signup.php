<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>Sign Up</title>
  <link rel="shortcut icon" type="image/x-icon" href="_Pictures/logo.ico">
  <link href="style-signup.css" rel="stylesheet" type="text/css" />
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
    <a href="index.php" style="text-decoration: none; color: black">
      <h2>Tasty Trove</h2>
    </a>
  </div>
  <div class="main-header-search">
    <form class="search-bar" action="/search">
      <input name="given-search-input" type="text" required="required" placeholder="Search...">
      <a href="index.php">
        <img src="_Pictures/search-icon.png" alt="search-icon">
      </a>
    </form>
  </div>
</header>

<div class="bg"></div>

<div class="register" id="register-form">

  <form method="POST" action="">
    <h2 class="register-header">Sign Up Here!</h2>
    <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
    <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
    <input type="submit" class="fadeIn fourth" value="Sign Up" name="submit">
  </form>

</div>
<script src="app.js"></script>
</html>

<?php
include 'dbconn.php';

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  insertEmp($username, $email, $password, $conn);
}

function insertEmp($username, $email, $password, $conn)
{

  $insert = "INSERT INTO account_details (Username, Email, Password) VALUES ('$username', '$email', '$password')";

  if (mysqli_query($conn, $insert)) {
    header("Location: login.php");
    exit;
  } else {
    echo "Failed to insert employee" . mysqli_error($conn);
  }
}
