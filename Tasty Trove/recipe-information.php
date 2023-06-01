<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style-recipe-information.css" rel="stylesheet" type="text/css" />
</head>

<?php
include 'dbconn.php';

$id = $_GET['id'];

$getdata = "SELECT * FROM recipes WHERE id = " . $id;

$result = mysqli_query($conn, $getdata);
?>

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
        <a href="index.php">
          <img src="_Pictures/search-icon.png" alt="search-icon">
        </a>
      </form>
    </div>
  </header>

  <div class="content">
    <div class="recipe-headers">
      <section>
        <div class="recipe-title">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<h3>" . $row['title'] . "</h3>";
            echo "<h6>by " . $row['author'] . "</h6>";
            echo "<p>Posted on " . $row['posted-date'] . "</p>";
            echo ""
          ?>
        </div>
        <?php
            echo "<div class='recipe-picture' style='background-image: url(" . $row['image-path'] . ");'></div>";
        ?>
      </section>

    </div>
    <hr>
    <div class="recipe-content">
      <div class="recipe-dish-description">
        <h3>Description</h3>
        <?php
            echo "<p>" . $row['description'] . "</p>";
        ?>
      </div>

      <div class="recipe-ingredients">
        <h3>Ingredients</h3>
        <?php
            echo $row['ingredients'];
        ?>
      </div>

      <div class="recipe-instructions">
        <h3>Instructions</h3>
      <?php
            echo $row['instruction'];
          }
      ?>
      </div>
    </div>
  </div>

  <footer class="main-footer">
    <div class="main-footer-container">
      <div class="main-footer-title">
        <h2>Tasty Trove</h2>
        <p>Bringing flavors to your kitchen, one recipe at a time.</p>
      </div>
      <div class="main-footer-links">
        <p><b>Social Media</b></p>
        <div class="social-media">
          <a href="facebook.com" target="_blank">Facebook</a>
          <a href="twitter.com" target="_blank">Twitter</a>
          <a href="instagram.com" target="_blank">Instagram</a>
        </div>
      </div>
      <div class="main-footer-email">
        <p><b>Email</b></p>
        <div class="main-footer-email-search">
          <form class="search-bar" action="/search">
            <input name="given-search-input" type="text" required="required" placeholder="Search...">
            <a href="index.html">
              <img src="_Pictures/search-icon.png" alt="search-icon">
            </a>
          </form>
        </div>
        <p>Sign up to get updated to our latest recipes!</p>
      </div>
    </div>
  </footer>

  <script src="app.js"></script>
</body>

</html>