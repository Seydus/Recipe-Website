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
        <h3>Fish Piccata</h3>
        <h6>by Steven Tiu</h6>
        <p>Posted on March 9, 2023</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/FishPicatta.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>What makes something a piccata?
        Piccata, though, is an Italian word meaning larded. It seems to be a translation of the French word pique 
        (sharp, as in piquant). When used in a reference to a way of preparing food (particularly meat or fish) it 
        means sliced and sauteed in a sauce containing lemon, butter, and spices</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>1 pound trout fillet, or other thin white fish fillet such as sole, halibut, or grouper </li>
        <li>Kosher salt and black pepper</li>
        <li>1 teaspoon dried oregano</li>
        <li>1 teaspoon paprika</li>
        <li>¾ teaspoon garlic powder</li>
        <li>¼ cup flour for dredging, (use whole wheat flour, all-purpose flour, or gluten free flour of your choice)</li>
        <li>⅓ cup extra virgin olive oil</li>
        <li>3 tablespoons unsalted butter or ghee divided</li>
        <li>2 lemons for the juice</li>
        <li>½ cup white wine or chicken broth</li>
        <li>4 tablespoons capers rinsed or drained</li>
        <li>Fresh chopped parsley for garnish</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>Season the fish on both sides with salt and pepper. Mix the oregano, paprika, and garlic powder and season the flesh side of the fish.
        </li>

        <li>To dredge, coat the fish on both sides with the flour.
        </li>

        <li>In a large cast iron skillet, heat the olive oil and 2 tablespoons of unsalted butter over medium-high heat. Carefully add the fish and cook for 2 to 3 minutes on each side (a total of 4 to 6 minutes), or until the fish is firm and flaky (being careful not to overcook the fish). Transfer the fish to a tray lined with paper towel to drain excess oil.
        </li>

        <li>To the same pan, add 1 more tablespoon of unsalted. Lower the heat, and add the lemon juice, white wine, and capers. Cook briefly over medium heat.
        </li>

        <li>Return the fish to the pan and spoon the sauce over the fish.
        </li>

        <li>Garnish with parsley and red pepper flakes, if using. Serve immediately!
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