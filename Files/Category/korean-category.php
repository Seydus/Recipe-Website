<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>Categories</title>
  <link rel="shortcut icon" type="image/x-icon" href="_Pictures/logo.ico">
  <link href="../style-category.css" rel="stylesheet" type="text/css" />
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
            <a href="../index.php">
              <span class="item">Home</span>
            </a>
          </li>
          <li>
            <a href="../list-of-categories.php" class="active">
              <span class="item">Categories</span>
            </a>
          </li>
          <li>
            <a href="../about-us.php">
              <span class="item">About Us</span>
            </a>
          </li>
          <li>
            <a href="../login.php">
              <span class="item">Log In</span>
            </a>
          </li>
          <li>
            <a href="../signup.php">
              <span class="item"><b>Sign Up</b></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="section">
        <div class="top-navbar">
          <div class="hamburger">
            <a class="hamburger-icon" style="cursor: pointer">
              <img src="../_Pictures/hamburger-menu.png" style="height: 20px">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-header-title">
      <a href="../index.php" style="text-decoration: none; color: black">
        <h2>Tasty Trove</h2>
      </a>
    </div>
    <div class="main-header-search">
      <form class="search-bar" action="/search">
        <input name="given-search-input" type="text" required="required" placeholder="Search...">
        <a href="../index.php">
          <img src="../_Pictures/search-icon.png" alt="search-icon">
        </a>
      </form>
    </div>
  </header>
  <div class="content">
      <div class="wrapper-content">
    <div class="content-categories-food">
      <div class="content-categories-title">
        <h1>Korean Category</h1>
      </div>
      <div class="content-categories-food-list">
  <?php
    include 'dbconn-category.php';
        
    $getIds = "SELECT * FROM recipes";
    
    $result = mysqli_query($conn, $getIds);

    if($result)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $tags = explode(', ', $row['tags']);

        foreach($tags as $tag)
        {
          if($tag == "Korean")
          {
            echo "
              <div class='categories-food-list-food'>
                <a href='../recipe-information.php?id=" . $row['id'] . "'>
                  <img src='../" . $row['image-path'] . "' alt='food image'>
                </a>
                <div class='categories-food-list-button'>
                  <a href='../recipe-information.php?id=" . $row['id'] . "'>" . $row['title'] . "</a>
                </div>
              </div>
            ";
          }
        }
      }
    }
    else
    {
      echo "Error executing the data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  ?>
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
              <img src="../_Pictures/search-icon.png" alt="search-icon">
            </a>
          </form>
        </div>
        <p>Sign up to get updated to our latest recipes!</p>
      </div>
    </div>
  </footer>

  <script src="../app.js"></script>
</body>

</html>