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
        <h3>Spaghetti</h3>
        <h6>by Gerome Johnson</h6>
        <p>Posted on February 42, 1821</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/Spaghetti.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>We know, spaghetti and meatballs is a classic for a reason, but sometimes you want to upgrade your usual weeknight dinner.
         Whether you're preparing for a fancy date night or a dinner party night amongst friends, we've got all the ways you can liven
         up your spaghetti game. When there are so many classic Italian pasta dishes, it can be hard to choose. Especially when that
         means you could have pasta puttanesca, carbonara, and or spaghetti Bolognese. Whatever you choose, don't skimp on the Parmesan cheese.
         Maybe you're craving the more cheesy side of the pasta spectrum, and we 100% support that.</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>1 Tbsp olive oil</li>
        <li>1 medium onion, chopped</li>
        <li>3 garlic cloves, minced</li>
        <li>1 jalapeno pepper , seeded and diced</li>
        <li>1 tsp ground cumin</li>
        <li>1 tsp chilli powder</li>
        <li>1 lb chicken breasts, (2 medium)</li>
        <li>20 oz can crushed tomatoes</li>
        <li>32 oz chicken broth </li>
        <li>14 oz can black beans, drained and rinsed</li>
        <li>14 oz can corn, drained and rinsed</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>Preheat a pan with 1/4 cup oil over medium-high heat. Cut tortillas into thin strips and fry them in batches in the hot oil until crisp.
        </li>
        <li>Preheat a pot with oil over medium-high heat. Add chopped onion, garlic and chopped jalapeño and sauté until veggies soften.</li>
        <li>PRemove chicken from the pot and shred it using 2 forks. Add shredded chicken back to the soup and simmer another 5 minutes then add lime juice.</li>
        <li>Serve the soup with some tortilla strips, pieces of avocado, fresh cilantro and lime wedges.</li>
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