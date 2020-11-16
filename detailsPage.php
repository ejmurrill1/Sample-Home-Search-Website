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
    <body>
        <TITLE>Macro Homes: Details Page</TITLE>


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
            <li aria-haspopup="true"> <a href="conneticut.php">Connecticut</a></li>

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
$id = $_GET['id'];

$sql = "SELECT *  FROM combinedhomes where id=?";
if ($connectsqli = $conn->prepare($sql)) {
    $connectsqli->bind_param('d', $id);
    /* execute prepared statement */

    $connectsqli->execute();
    $result = $connectsqli->get_result();
    $row = $result->fetch_object();
    ?>
    <h4>Home Basics</h4>

    <h5> <?php echo "Price: $row->price"; ?> </h5>
    <br>
    <?php
    echo "Address: $row->address";
    echo "$row->city";
    echo " $row->state,";
    echo "  $row->zipcode";
    ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/3030/3030336.svg" width="3%" height="3%">
    <?php echo "Number of beds: $row->numbed"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/900/900688.svg" width="3%" height="3%">
    <?php echo "Number of restrooms: $row->numbath"; ?>
    <br>

    <br><br>
    <h4> About <?php echo" $row->city"; ?> </h4>
    <img src="https://www.flaticon.com/svg/static/icons/svg/615/615075.svg" width="3%" height="3%">
    <?php echo "Population: $row->population"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/31/31370.svg" width="3%" height="3%">
    <?php echo "Median Age of Residents: $row->MedianAge"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/631/631200.svg" width="3%" height="3%">
    <?php echo "Median Household Income: $row->MedianHouseholdIncome"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/2231/2231605.svg" width="3%" height="3%">
    <?php echo "Residents with a Bachelor's Degree: $row->BachelorDegree"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/3208/3208803.svg" width="3%" height="3%">
    <?php echo "Property Crime Index: $row->PropertyCrimeIndex"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/1946/1946488.svg" width="3%" height="3%">
    <?php echo "Total Housing Units: $row->TotalHousingUnits"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/2329/2329942.svg" width="3%" height="3%">
    <?php echo "Owner Occupied Housing Units: $row->OwnerOccupiedHUs"; ?>
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/951/951216.svg" width="3%" height="3%">
    <?php echo "Population Growth Rate: $row->PopulationGrowthRate"; ?> %
    <br>
    <img src="https://www.flaticon.com/svg/static/icons/svg/3260/3260792.svg" width="3%" height="3%">
    <?php
    echo "Air Quality Index: $row->airquality";
    if ($row->airquality >= 0 && $row->airquality <= 50) {
        echo ", air quality is good.";
    } elseif ($row->airquality >= 51 && $row->airquality <= 100) {
        echo ", air quality is moderate.";
    } elseif ($row->airquality >= 101 && $row->airquality <= 150) {
        echo ", air quality is unhealthy for sensitive groups.";
    } elseif ($row->airquality >= 151 && $row->airquality <= 200) {
        echo ", air quality is unhealthy.";
    } elseif ($row->airquality >= 201 && $row->airquality <= 300) {
        echo ", air quality is very unhealthy.";
    } elseif ($row->airquality >= 301 && $row->airquality <= 500) {
        echo ", air quality is hazardous.";
    }
}
?>


</div>
</div>

</body>
</html>
