<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>Categories</title>
  <link rel="shortcut icon" type="image/x-icon" href="_Pictures/logo.ico">
  <link href="style-list-of-categories.css" rel="stylesheet" type="text/css" />
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
        <a href="index.php">
          <img src="_Pictures/search-icon.png" alt="search-icon">
        </a>
      </form>
    </div>
  </header>

  <div class="content">
    <div class="content-categories-food">
      <div class="content-categories-title">
        <div class="title">
          <h1>Categories</h1>
        </div>
        <div class="add-recipe">
          <a href="submit-recipe.php">Add Recipe</a>
        </div>
      </div>
        <div class="content-categories-food-list">
        <div class="food">
          <a href="Category/chinese-category.php">
            <img src="_Pictures/chinesefood.jpg" alt="Chinese Cuisine">
          </a>
          <div class="btn">
            <a href="Category/chinese-category.php">Chinese</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/american-category.php">
        <img src="_Pictures/americanfood.jpg" alt="American Cuisine">
          </a>
          <div class="btn">
            <a href="Category/american-category.php">American</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/vietnamese-category.php">
        <img src="_Pictures/vietnamesefood.jpg" alt="Vietnamese Cuisine">
          </a>
          <div class="btn">
            <a href="Category/vietnamese-category.php">Vietnamese</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/indian-category.php">
        <img src="_Pictures/indianfood.jpg" alt="Indian Cuisine">
          </a>
          <div class="btn">
            <a href="Category/indian-category.php">Indian</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/korean-category.php">
        <img src="_Pictures/koreanfood.jpg" alt="Korean Cuisine">
          </a>
          <div class="btn">
            <a href="Category/korean-category.php">Korean</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/japanese-category.php">
        <img src="_Pictures/japanesefood.jpg" alt="Japanese Cuisine">
          </a>
          <div class="btn">
            <a href="Category/japanese-category.php">Japanese</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/mexican-category.php">
        <img src="_Pictures/mexicanfood.jpg" alt="Chinese Cuisine">
          </a>
          <div class="btn">
            <a href="Category/mexican-category.php">Mexican</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/filipino-category.php">
        <img src="_Pictures/filipinofood.jpg" alt="Filipino Cuisine">
          </a>
          <div class="btn">
            <a href="Category/filipino-category.php">Filipino</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/arabic-category.php">
        <img src="_Pictures/arabic.jpg" alt="Arabic Cuisine">
          </a>
          <div class="btn">
            <a href="Category/arabic-category.php">Arabic</a>
          </div>
        </div>
        <div class="food">
        <a href="Category/italian-category.php">
        <img src="_Pictures/italianfood.jpg" alt="Italian Cuisine">
          </a>
          <div class="btn">
            <a href="Category/italian-category.php">Italian</a>
          </div>
        </div>
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
  </script>
</body>

</html>