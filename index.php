<?php
include 'database.php';
 ?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="loginPage.php">Login</a>
        <a href="registrationPage.php">Registration</a>
    </div>
    <div class="jumbotron text-center">
      <h2>Macro Homes</h2>
      <h1>Search for a Home</h1>
    </div>

    <div class="container">
    <form action="houseListings.php" method="POST">
        <div class="input-group mb-4">
            <input type="search" name="search" placeholder="Enter a city, address, or zip code" aria-describedby="button-addon5" class="form-control">
            <div class="input-group-append">
                <button id="button-addon5" type="submit" name="submit-search" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    </div>

  <div class="container">
  <div class="card-deck" style='margin-bottom: 80px'>
    <?php
    require 'filterOptions.php';

    $sql = "SELECT * FROM combinedhomes ORDER BY Rand() limit 3";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if($queryResults > 0){
      while($row = mysqli_fetch_assoc($result)) { ?>
        <div class='card mb-3' style='width: 18rem;'>
        <img class='card-img-top' src="<?php echo $row['image-src'] ?>" alt='Avatar' style='width:100%'>
            <div class='container'>
                <h3><?php echo $row['address'] ?></h3>
                <p><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></p>
                <p><?php echo $row['price'] ?></p>
                <p><?php echo $row['numbed'] . " bd " . $row['numbath'] . " bth " . $row['squarefootage'] . " SqFt" ?></p>
            </div>
        </div>
      <?php
}
}

  $conn->close();
  ?>
</div>
</div>

</body>
</html>
