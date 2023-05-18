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
        <h3>Salmon Kushiyaki</h3>
        <h6>by Rhenz Largo</h6>
        <p>Posted on May 20, 2039</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/SalmonKushiyaki.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>This rendition of kushiyaki — the catch-all term for the popular Japanese technique of grilling skewered foods 
        — is a play on a surf and turf, combining salmon with earthy shiitake mushrooms, for a dose of umami. Here the fish 
        is first marinated in a mirin, sake and miso mixture; the same mixture is also brushed on the skewers during 
        cooking for a burnished glaze.</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>1/4 cup mirin </li>
        <li>1/4 cup sake</li>
        <li>1/4 cup packed light brown sugar</li>
        <li>1/4 cup light miso</li>
        <li>1 1/2 pounds center-cut, skin-on salmon, trimmed and cut into 1-inch cubes</li>
        <li>6 shiitake mushrooms, stemmed and quartered</li>
        <li>Vegetable oil, for the grill grates</li>
        <li>Kosher salt</li>
        <li>Furikake or shichimi togarashi, for serving</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>Soak four 10-inch bamboo paddle skewers in water for 30 minutes. <br>
        </li>

        <li>Combine the mirin and sake in a small saucepan and bring to a boil over medium-high heat. Add the brown sugar and cook 1-2 minutes. <br>
        </li>

        <li> Add the miso and whisk until dissolved, 1 to 2 minutes. Let cool, then remove 1/4 cup and set aside for brushing. Pour the remaining marinade over the salmon cubes in a baking dish, tossing to coat. 
        </li>

        <li>Refrigerate the salmon and reserved marinade for at least 6 hours and preferably overnight. Lightly coat the hot grates with vegetable oil.
        </li>

        <li>Remove the salmon from the marinade and blot dry with a paper towel. Thread each skewer with 5 to 6 pieces each of salmon and shiitake.
        </li>

        <li>Place the skewers on the grill and lightly sprinkle each with salt. Grill for 1 minute on each side (so they cook evenly). 
        </li>
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