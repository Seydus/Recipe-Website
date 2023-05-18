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
        <h3>Kafta Kebab</h3>
        <h6>by Steven Tiu</h6>
        <p>Posted on April 28, 2023</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/kebab.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>These kebabs are hearty, delicious and go with a variety of options. 
        You can make a shawarma with them or serve alongside Lebanese rice. They go so well with Fattoush or a simple garlic sauce.</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>500 g mince beef</li>
        <li>3 tablespoon parsley chopped</li>
        <li>2 tablespoon mint chopped</li>
        <li>1 small onion chopped</li>
        <li>1-2 green chilies sliced</li>
        <li>4 cloves garlic minced </li>
        <li>1 tablespoon fresh ginger</li>
        <li>½ teaspoon nutmeg powder</li>
        <li>½ teaspoon garam masala</li>
        <li>1 slice sandwich bread</li>
        <li>1 teaspoon salt and pepper to taste</li>
        <li>1 ½ teaspoon cumin powder</li>
        <li>1½ teaspoon garam masala </li>
        <li>2 green onions, finely chopped</li>
        <li>1 egg whisked</li>
        <li>1 ½ teaspoon coriander powder</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>Break the slice of bread in a small bowl and add 2-3 tablespoon milk to it. Crush with a fork.

        <li>Then add all the ingredients to the mince beef along with the bread.
        </li>

        <li>Grind everything in a food processor or chopper to combine well.
        </li>

        <li>Moisten your hands with water and make flat, oblong kebabs
        </li>

        <li>On a grill pan or outdoor grill, cook these for around 8-10 mins in total. Flip sides in between. 
        </li>

        <li>Remove on a plate and serve with garlic sauce or yogurt dressing.
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