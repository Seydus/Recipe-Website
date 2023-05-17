<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style-recipe.css" rel="stylesheet" type="text/css" />
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
            <a href="index.html">
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

  <div class="recipe-headers">
    <section>
      <div class="recipe-title">
        <h3>Chicken Tortilla Soup</h3>
        <h6>by Tyler Heinrich</h6>
        <p>Posted on January 12, 0000</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/ChickenTortillaSoup.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>Tortilla soup is a Mexican-inspired soup made with a tomato broth base. Chicken 
        Tortilla soup can also be made with lamb, beef, or fish, but since this is chicken tortilla soup,
        I use chicken breasts. You can also use skinless chicken thighs or shredded chicken</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>2 lbs. Chicken cut into serving pieces</li>
        <li>1 piece Knorr Chicken Cube</li>
        <li>1 head garlic crushed</li>
        <li>1 piece onion chopped</li>
        <li>6 pieces dried bay leaves</li>
        <li>1 tablespoon whole peppercorn</li>
        <li>½ cup soy sauce</li>
        <li>5 tablespoons white vinegar</li>
        <li>1 ½ tablespoons dark brown sugar</li>
        <li>2 cups water</li>
        <li>3 tablespoons cooking oil</li>
        <li>Salt to taste</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>Heat oil in a cooking pot. Saute garlic and onion until the garlic turns light brown and the onion softens.
        </li>
        <li>Add chicken pieces. Cook until the chicken turns light brown.</li>
        <li>Pour water, soy sauce, and vinegar. Let boil.</li>
        <li>Add Knorr Chicken Cube, whole peppercorn, and dried bay leaves. Stir. Cover the pot and cook in medium heat
          for 15 minutes.</li>
        <li>Turn the chicken pieces over. Cover and continue to cook for another 15 minutes.</li>
        <li>Add dark brown sugar and season with salt.</li>
        <li>Transfer to a serving bowl. Serve. Share and enjoy!</li>
      </ol>
    </div>
  </div>

  <!-- footer code -->
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
      </div>
    </div>
  </footer>
  
  <script src="app.js"></script>
</body>

</html>