<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>Tasty Trove</title>
  <link rel="shortcut icon" type="image/x-icon" href="_Pictures/logo.ico">
  <link rel="stylesheet" type="text/css" href="style-submit-recipe.css">
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
            <a href="index.html" class="active">
              <span class="item">Home</span>
            </a>
          </li>
          <li>
            <a href="categories.html">
              <span class="item">Categories</span>
            </a>
          </li>
          <li>
            <a href="about-us-page.html">
              <span class="item">About Us</span>
            </a>
          </li>
          <li>
            <a href="login-page.php">
              <span class="item">Log In</span>
            </a>
          </li>
          <li>
            <a href="signup-page.php">
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

  <h1>Add Recipe</h1>

<form action="" method="POST">
    <label for="title">Recipe Name:</label>
    <input type="text" id="title" name="title" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <label for="ingredients">Ingredients:</label>
    <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

   <label for="instruction">Instruction:</label>
   <textarea id="instruction" name="instruction" rows="6" required></textarea>

    <div class="tags-input">
    <div class="tags-container">
        <div class="tag"><span>tag1</span><button>x</button></div>
        <div class="tag"><span>tag2</span><button>x</button></div>
        <div class="tag"><span>tag3</span><button>x</button></div>
    </div>
    <select id="tag-select">
        <option value="">Select a tag</option>
        <option value="tag4">Tag 4</option>
        <option value="tag5">Tag 5</option>
        <option value="tag6">Tag 6</option>
    </select>
</div>

   <button type="Submit" name="submit">Submit</button>
</div>
</form>
    <script src="app.js"></script>
</body>
</html>

<?php
include 'dbconn.php';

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $postedDate = date("F d, Y");
    $author = $_POST['Username'];

    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];
    $instruction = $_POST['instruction'];
    $tags = $_POST['tags'];

    OnInsertInDatabase($title, $author, $postedDate, $description, CompactInfoToList($ingredients), CompactInfoToList($instruction), $tags, $conn);
}

function CompactInfoToList($info)
{
    $lines = explode("\n", $info);
    $formattedText = '<ul>';
    foreach($lines as $line)
    {
        $formattedText .= '<li>' . trim($line) . '</li>';
    }

    $formattedText .= '</ul>';

    return $formattedText;
}

function OnInsertInDatabase($title, $postedDate, $author, $description, $ingredients, $instruction, $tags, $conn)
{
    $insert = "INSERT INTO recipes (title, author, `posted-date`, description, ingredients, instruction, tags) 
               VALUES ('$title', '$postedDate', '$author', '$description', '$ingredients', '$instruction', '$tags')";

    if(mysqli_query($conn, $insert))
    {
        echo "<br>Data has been inserted!";
    }
    else
    {
        echo "Failed to insert data: " . mysqli_error($conn);
    }
}
