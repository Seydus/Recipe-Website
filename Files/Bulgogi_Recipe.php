<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>recipe</title>
  <link href="style-fish-picatta.css" rel="stylesheet" type="text/css" />
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
        <h3>Beef Bulgogi</h3>
        <h6>by Steven Tiu</h6>
        <p>Posted on December 21, 2022</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/bulgogi.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>Bulgogi, sometimes known as Korean BBQ beef, is a dish of thinly sliced grilled steak that has been marinated in a sweet soy, sesame, and garlic sauce. 
        If you want to spice it up, serve the beef in lettuce cups with rice and hot pepper paste (gochujang)..</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>5 tablespoons soy sauce</li>
        <li>¼ cup chopped green onion</li>
        <li>2 ½ tablespoons white sugar </li>
        <li>2 tablespoons minced garlic</li>
        <li>2 tablespoons sesame seeds</li>
        <li>2 tablespoons sesame oil </li>
        <li>½ teaspoon ground black pepper</li>
        <li>Pinch of salt to taste</li>
        <li>¼ teaspoon ground white pepper</li>
        <li>1 pound flank steak, thinly sliced</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>

        <li>Whisk soy sauce, green onion, sugar, garlic, sesame seeds, sesame oil, and pepper together in a bowl. 
        </li>

        <li>Place flank steak slices in a shallow dish. Pour marinade over top. Cover and refrigerate for at least 1 hour or overnight. 
        </li>

        <li>Preheat an outdoor grill for high heat, and lightly oil the grate. 
        </li>

        <li>Quickly grill flank steak slices on the preheated grill until slightly charred and cooked through, 1 to 2 minutes per side. 
        </li>

        <li>Serve hot over rice and enjoy! 
        </li>
      </ol>
    </div>
  </div>

  footer code
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