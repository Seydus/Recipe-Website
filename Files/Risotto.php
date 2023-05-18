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
        <h3>Parmesan Risotto</h3>
        <h6>by Blackie Chan</h6>
        <p>Posted on July 29, 2032</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/Risotto.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>A classic risotto is a rich, creamy dish with nearly a porridge-like consistency, yet each grain of rice 
        retains a distinct bite. In Italian risotto, the rice is parched as in the pilaf method, but the liquid is added
         and absorbed gradually while the grain is stirred almost constantly.</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>8 cups chicken broth</li>
        <li>1/2 cup finely chopped onion</li>
        <li>1/4 cup olive oil</li>
        <li>3 cups arborio rice</li>
        <li>2 garlic cloves, minced</li>
        <li>1 cup dry white wine or water</li>
        <li>1/2 cup shredded Parmesan cheese</li>
        <li>1/4 teaspoon salt</li>
        <li>1/4 teaspoon pepper</li>
        <li>3 tablespoons minced fresh parsley</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>In a large saucepan, heat broth and keep warm. In a Dutch oven, saute onion in oil until tender. 
        </li>

        <li>Add rice and garlic; cook and stir for 2-3 minutes. Reduce heat; stir in wine. Cook and stir until all of the liquid is absorbed.
        </li>

        <li>Add heated broth, 1/2 cup at a time, stirring constantly and allowing the liquid to absorb between additions. Cook just until risotto is creamy and rice is almost tender, about 20 minutes
        </li>

        <li>Add the remaining ingredients; cook and stir until heated through. Serve immediately.
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