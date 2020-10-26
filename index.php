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
<TITLE>Macro Homes</TITLE>
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

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto bg-white p-5 rounded shadow">
        <?php require_once 'searchForm.php'; ?>
            </div>
        </div>
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
        <img class='card-img-top' src="<?php echo $row['image-src'] ?>" alt='Not Found' onerror=this.src="https://d3bmimpiifbojs.cloudfront.net/wp-content/uploads/2017/04/no-image-image-1.png?x83809">
            <div class='container'>
                <h3><?php echo $row['address'] ?></h3>
                <p><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></p>
                <p><?php echo $row['price'] ?></p>
                <p><?php echo $row['numbed'] . " bd " . $row['numbath'] . " bth " . $row['squarefootage'] . " SqFt" ?></p>
                <td><a href=detailsPage.php>More details</a></td>
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
