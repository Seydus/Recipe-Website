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
        <h3>Yang Chow Fried Rice</h3>
        <h6>by Steven Tiu</h6>
        <p>Posted on March 18, 2023</p>
      </div>

      <div class="recipe-picture" style="background-image: url('_Pictures/YangChow.jpg');"></div>
    </section>

  </div>

  <div class="recipe-content">

    <div class="recipe-dish-description">

      <p>Yangzhou fried rice is enjoying super high popularity across the country. One of the reasons why it is so famous is because 
        of the picky requirements of the raw ingredients. It is made with rice that is stir-fried with vegetables and meat and typically includes ingredients such as ham, shrimp, 
        peas, carrots, and eggs.</p>

    </div>

    <div class="recipe-ingredients-instructions">

      <h3>Ingredients</h3>
      <ul>
        <li>6 cups leftover white rice</li>
        <li>2 large eggs, beaten</li>
        <li>2 tablespoons of vegetable oil, butter, or lard can enhance the flavors of fried rice greatly. So you can try to change the oil type you use for fried rice. </li>
        <li>¼ cup diced Chinese ham (or you can use char siu or sausage )</li>
        <li>8-10 shrimp, deveined (optional)</li>
        <li>½ cup green peas, both frozen peas or fresh ones </li>
        <li>½ cup diced carrot, you can use frozen carrots or fresh ones</li>
        <li>Pinch of salt to taste</li>
        <li>¼ teaspoon ground white pepper</li>
        <li>1 tablespoon light soy sauce, you can skip this but it adds a faint unami flavor to the fried rice. But it will also increase the moisture of the fried rice. </li>
        <li>2 green onions, finely chopped</li>
        <li>Pinch of msg to taste</li>
      </ul>

      <h3>Instructions</h3>
      <ol>
        <li>Slightly separate the grains of rice by slightly pressing the rice with a rice scoop.

        <li>Heat up 1 tablespoon of cooking oil in a wok or a nonstick skillet or wok. Fry shrimp and ham dice until slightly seared. Transfer out.
        </li>

        <li>Add rice in, and use a turner to separate the rice.
        </li>

        <li>When the rice grain is slightly warm and hot. Add the remaining 1 tablespoon of cooking oil and pour in the beaten egg and the fried rice. Give a quick stir so the egg and rice can be mixed well quickly.
        </li>

        <li>Add green beans, carrots, ham, and shrimp, light soy sauce, and sprinkle a pinch of salt and white pepper. Give everything a big stir-fry and mix well. 
        </li>

        <li>Then add green onion and fry for another 30 seconds.
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