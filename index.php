<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="style.css">
  <div id="navbar">
   <a href="index.php">Home</a>
   <a href="loginPage.php">Login</a>
  </div>
</head>
<body>
    <form action="houseListings.php" method="POST">
      <input type="text" name="search" placeholder="Search">
      <button type="submit" name="submit-search">Search</button>
    </form>

    <div class="jumbotron text-center">
  <h1>Home Property Search</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
</div>  
</body>
</html>

