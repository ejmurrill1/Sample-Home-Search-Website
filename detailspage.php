<html>

    <?php include 'header.php'; ?>

    <TITLE>Macro Homes: Details Page</TITLE>
    <body>

        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-9 mx-auto text-center">
                    <h1 class="display-4">About the Home</h1>
                </div>
            </div>
        </div>

<!--Nav-->
<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
						<li aria-haspopup="true"> <a href="california.php"> California</a></li>
						<li aria-haspopup="true"> <a href="newYork.php"> New York</a></li>
							<li aria-haspopup="true"> <a href="conneticut.php">Conneticut</a></li>
											
												</nav>
<!--/Nav-->

        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM combinedhomes WHERE id = $id";
        $result = $conn->query($sql);

        if ($result != null) {
            while ($row = $result->fetch_assoc()) {
                ?>
                    <img class='card-img-top' src="<?php echo $row['image-src'] ?>" alt='Not Found' onerror=this.src="https://d3bmimpiifbojs.cloudfront.net/wp-content/uploads/2017/04/no-image-image-1.png?x83809"> 
                    <div class='container'>
                    <h2>Home Details</h2>
                        <h3><?php echo "Address: " . $row['address'] ?></h3>
                        <h3><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></h3>
                        <p><?php echo "Price: " . $row['price']; ?></p>
                        <p><?php echo "Beds: " . $row['numbed'] . " Bath: " . $row['numbath'] . " Square Feet: " . $row['squarefootage'] ?></p>
                    <h2>About</h2>
                        <p><?php echo "Population: " . $row['population']; ?></p>
                        <p><?php echo "Population Growth Rate: " . $row['PopulationGrowthRate']; ?></p>
                        <p><?php echo "Median Age: " . $row['MedianAge']; ?></p>
                        <p><?php echo "Median Household Income: " . $row['MedianHouseholdIncome']; ?></p>
                        <p><?php echo "Residents with Bachelor's Degree: " . $row['BachelorDegree']; ?></p>
                        <p><?php echo "Air Quality: " . $row['airquality']; ?></p>
                        <p><?php echo "Unemployment Rate: " . $row['UnemploymentRate']; ?></p>

                    </div>
                <?php
            }
        }
        $conn->close();
        ?>

    </body>
</html>
