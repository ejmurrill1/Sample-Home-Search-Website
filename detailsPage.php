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
<?php
$address=$_GET['address'];


require "database.php"; 

$result="SELECT *  FROM combinedhomes where address=?";

if($stmt = $connectsqli->prepare($result)){
  $stmt->bind_param('i',$address);
  $stmt->execute();

 $result = $stmt->get_result();
 echo "No of records : ".$result->num_rows."<br>";
 $row=$result->fetch_object();
 echo "<table>";
echo "<tr ><td><b>Address</b></td><td>$row->address</td></tr>
<tr><td><b>Class</b></td><td>$row->class</td></tr>
<tr ><td><b>Mark</b></td><td>$row->mark</td></tr>
<tr><td><b>Address</b></td><td>$row->address</td></tr>
<tr ><td><b>Image</b></td><td>$row->img</td></tr>
";
echo "</table>";
}else{
echo $connection->error;
}
?>

		</div>
		</div>
		
		</body>
		</html>
