<?php
include 'database.php';

?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
	    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Merriweather|Monserrat">
	
</head>

  <?php include 'header.php'; ?>
<TITLE>Macro Homes: Details Page</TITLE>
<body>
<!--Nav-->
				<nav class="navbar sticky-top">
				<div class="row py-1">
						<ul class="horizontalMenu-list">
						<li aria-haspopup="true"> <a href="california.php"> California</a></li>
						<li aria-haspopup="true"><a href="colorado.php">Colorado</a></li>
						<li aria-haspopup="true"><a href="conneticut.php">Conneticut</a></li>
						<li aria-haspopup="true"> <a href="newYork.php"> New York</a></li>
						</div>
				</nav>
<!--Nav-->
<!--About Home --> 
       
          <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-9 mx-auto text-center">
                    <h1 class="display-4">Details</h1>
                </div>
            </div>
        </div>

			
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM cis4290 WHERE id = $id";
        $result = $conn->query($sql);

        if ($result != null) {
            while ($row = $result->fetch_assoc()) {
                ?>
				  <div class="container-fluid">
            <div class="row py-1">
                <div class="col-lg-9 mx-auto">
                    <img src="<?php echo $row['image-src'] ?>" alt='Not Found' onerror=this.src="https://d3bmimpiifbojs.cloudfront.net/wp-content/uploads/2017/04/no-image-image-1.png?x83809">
                    <div class='container'>
					<br>
					<h2>Home Details</h2>
					<br>
                        <h3><?php echo "Address: " . $row['address'] ?></h3>
                        <h3><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></h3>
                        <p><?php echo "Price: " . $row['price']; ?></p>
                        <p><?php echo "Beds: " . $row['numbed'] . " Bath: " . $row['numbath'] . " Square Feet: " . $row['squarefootage'] ?></p> <br>
						<h2> About <?php echo $row['city'];?> </h2> <br>
                        <p><?php echo "Population: " . $row['population']; ?></p>
						<p><?php echo "Population Growth Rate: " . $row['PopulationGrowthRate']; ?></p>
                        <p><?php echo "Median Age: " . $row['MedianAge']; ?></p>
                        <p><?php echo "Median Household Income: " . $row['MedianHouseholdIncome']; ?></p>
						<p><?php echo "Residents with Bachelor's Degree: " . $row['BachelorDegree']; ?>/<?php echo $row['population'];?></p>
                        <p><?php echo "Air Quality: " . $row['airquality']; ?></p>
                        <p><?php echo "Unemployment Rate: " . $row['UnemploymentRate']; ?></p>

                    </div>
					</div>
					</div>
					</div>
                <?php
            }
        }
        $conn->close();
        ?>

    </body>
</html>