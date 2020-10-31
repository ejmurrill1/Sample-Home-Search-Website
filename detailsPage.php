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
<TITLE>Macro Homes: Details Page</TITLE>
<body>

<div id="navbar"/>
        <a href="index.php">Home</a>
        <a href="loginPage.php">Login</a>
        <a href="registrationPage.php">Registration</a>
    </div>
<!--Nav-->
			<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
						<li aria-haspopup="true"> <a href="california.php"> California</a></li>
						<li aria-haspopup="true"> <a href="newYork.php"> New York</a></li>
							<li aria-haspopup="true"><a href="conneticut.php">Conneticut</a></li>
											
												</nav>
<!--/Nav-->

<div class="container-fluid">
    <div class="row py-5">
        <div class="col-lg-9 mx-auto text-center">
            <h1 class="display-4">About the Home</h1>
      </div>
				</div>
				
				  </div>
				  </div>
<?php



$id=$_GET['id'];

$sql="SELECT *  FROM combinedhomes where id=?";
if ( $connectsqli = $conn->prepare($sql)){
	$connectsqli->bind_param('d',$id);
	/*execute prepared statement*/
	
	$connectsqli->execute();
	$result=$connectsqli->get_result();
	$row=$result->fetch_object();
	
	?>
	
<h4>Home Basics</h4>

<h5> <?php
 
echo " Price: $row->price";?> </h5>
<br>
<?php
echo "Address: $row->address ";
echo "$row->city";
echo " $row->state,";
echo "  $row->zipcode"; ?>

<br>
<?php
echo  "Number of beds: $row->numbed  ";
echo "Number of restrooms: $row->numbath - ";  ?>
<br> <br>
<h4> About <?php echo" $row->city ";?> </h4>
<?php 
echo "Population: $row->population - "; 

echo "Median Age of Residents: $row->MedianAge - " ;
echo "Median Household Income: $row->MedianHouseholdIncome - "; 
echo" Residents with a Bachelor's Degree: $row->BachelorDegree -  ";

echo "Property Crime Index: $row->PropertyCrimeIndex - ";

echo " Total Housing Units: $row->TotalHousingUnits - ";
echo " Owner Occupied Housing Units: $row->OwnerOccupiedHUs" ;

echo "Population Growth Rate: $row-> PopulationGrowthRate - ";
echo "  Air Quality Index: $row-> airquality - ";

          
}
?>


		</div>
		</div>
		
		</body>
		</html>
