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
        <h3>Buffalo Wings</h3>
        <h6>by Cedric Rafanan</h6>
        <p>Posted on July 27, 2022</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/buffalo-wings2.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>Buffalo wings, that ever-popular dish consisting of deep-fried chicken wings, slathered in spicy sauce and 
        served with blue cheese dressing and raw celery and carrots, are one of those few lucky foods that are famous enough
        to boast their very own creation myth. Heres how to make them!</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>½ cup all-purpose flour</li>
        <li>¼ teaspoon ground paprika</li>
        <li>¼ teaspoon cayenne pepper</li>
        <li>¼ teaspoon salt</li>
        <li>10 chicken wings</li>
        <li>2 cups vegetable oil for frying, or as needed</li>
        <li>¼ cup butter</li>
        <li>¼ cup hot sauce</li>
        <li>1 pinch ground black pepper</li>
        <li>1 pinch garlic powder</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>Whisk together flour, paprika, cayenne pepper, and salt in a large bowl.
        </li>

        <li>Place chicken wings in the bowl with flour mixture and toss until evenly coated. Transfer wings to a 9x13-inch glass baking dish and arrange in a single layer. 
            Cover and refrigerate for 1 to 1 1/2 hours.
        </li>

        <li>Add about 1 inch oil to a deep, heavy skillet; heat to 375 degrees F (190 degrees C). (The oil should be just enough to cover wings entirely.)
        </li>

        <li>Meanwhile, combine butter, hot sauce, pepper, and garlic powder in a separate small saucepan over low heat. Cook and stir until butter is melted and mixture is thoroughly blended.
             Remove from the heat and reserve for serving.
        </li>

        <li>Fry coated wings in the hot oil for 10 to 15 minutes, or until they begin to crisp and turn brown. Maintain the oil temperature while cooking. Remove cooked wings from hot oil and let drain on paper towels or a wire rack.
        </li>

        <li>Transfer wings to a platter and drizzle hot sauce over top; or mix wings and hot sauce in a bowl until coated.
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