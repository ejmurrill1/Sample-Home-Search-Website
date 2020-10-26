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

<div id="navbar"/>
        <a href="index.php">Home</a>
        <a href="loginPage.php">Login</a>
        <a href="registrationPage.php">Registration</a>
    </div>
<!--Nav-->
					<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
						<li aria-haspopup="true"><a href="">California</a></li>
						
							<li aria-haspopup="true"><a href="">New York</a></li>
							<li aria-haspopup="true"><a href="">Conneticut</a></li>
							
											
												</nav>
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







$sql="SELECT *  FROM cis4290 where id=?";
if ( $connectsqli = $conn->prepare($sql)){
	$connectsqli->bind_param('d',$id);
	/*execute prepared statement*/
	
	$connectsqli->execute();
	$result=$connectsqli->get_result();
	$row=$result->fetch_object();
	
	?>
	


<?php
echo "Address: $row->address";
echo " $row->state";
echo "  $row->zipcode";

echo " Price: $row->price";



           
}

?>
		</div>
		</div>
		
		</body>
		</html>