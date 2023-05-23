<?php
include 'dbconn.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tasty Trove</title>
  <link rel="shortcut icon" type="image/x-icon" href="_Pictures/logo.ico">
  <link rel="stylesheet" href="style-submit-recipe.css">
</head>

<body>

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
            <a href="list-of-categories.php" class="active">
              <span class="item">Categories</span>
            </a>
          </li>
          <li>
            <a href="about-us.php">
              <span class="item">About Us</span>
            </a>
          </li>
          <li>
            <a href="login.php">
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
        <a href="index.html">
          <img src="_Pictures/search-icon.png" alt="search-icon">
        </a>
      </form>
    </div>
  </header>

  <div class="content">
    <div class="add-recipe-title">
      <h1>Add Recipe</h1>
    </div>

    <form action="submit-recipe-information.php" method="POST" enctype="multipart/form-data">
      <div class="form-container">
        <label for="title">Recipe Name:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="ingredients">Ingredients:</label>
        <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

        <label for="instruction">Instruction:</label>
        <textarea id="instruction" name="instruction" rows="6" required></textarea>

        <label for="racipe-image">Recipe Image:</label>
        <input class="upload-file" type="file" name="image" accept="image/*" required>

        <label for="tags">Tags:</label>
        <div class="tags-input">
          <div class="tags-container">
          </div>
          <select class="tag-select" id="tag-select">
            <option value="">Select a tag</option>
            <option value="Chinese">Chinese</option>
            <option value="American">American</option>
            <option value="Vietnamese">Vietnamese</option>
            <option value="Indian">Indian</option>
            <option value="Korean">Korean</option>
            <option value="Japanese">Japanese</option>
            <option value="Mexican">Mexican</option>
            <option value="Filipino">Filipino</option>
            <option value="Arabic">Arabic</option>
            <option value="Italian">Italian</option>
          </select>
        </div>
        <button class="submit-button" type="submit" name="submit" value="Upload">Submit</button>
      </div>
    </form>
  </div>

  <script src="app.js"></script>
</body>
</html>