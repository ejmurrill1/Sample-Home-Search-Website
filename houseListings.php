<?php
include 'database.php';
 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<h1>Search Page</h1>

<div class="houseList">
  <form action="houseListings.php" method="POST">
    <input type="text" name="search" placeholder="Search" aria-label="Search">
    <button type="submit" name="submit-search">Search</button>

     <select name="inputbed">
        <option>Beds</options>
        <option value="0">Any</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
        <option value="5">5+</option>
        <option value="6">6+</option>
      </select>

      <select name="inputBath">
        <option selected>Bath</options>
          <option value="0">Any</option>
          <option value="1">1+</option>
          <option value="2">2+</option>
          <option value="3">3+</option>
          <option value="4">4+</option>
          <option value="5">5+</option>
          <option value="6">6+</option>
      </select>

    <input type="text" placeholder="Min Price" name="minPrice">
    <input type="text" placeholder="Max Price" name ="maxPrice">


    <input type="text" placeholder="Min SqFt" name="minSqFt">
    <input type="text" placeholder="Max SqFt" name ="maxSqFt">

<div class="form-row">
    <input type="text" placeholder="Min Population" name="minPopulation">
    <input type="text" placeholder="Max Population" name ="maxPopulation">

    <input type="text" placeholder="Min Median Age" name="minMedianAge">
    <input type="text" placeholder="Max Median Age" name ="maxMedianAge">

    <input type="text" placeholder="Min Median Household Income" name="minMedianHouseholdIncome">
    <input type="text" placeholder="Max Median Household Income" name ="maxMedianHouseholdIncome">

    <input type="text" placeholder="Min Unemployment Rate" name="minUnemploymentRate">
    <input type="text" placeholder="Max Unemployment Rate" name ="maxUnemployment Rate">

    <input type="text" placeholder="Min Crime Index" name="minCrimeIndex">
    <input type="text" placeholder="Max Crime Index" name ="maxCrimeIndex">

    <input type="text" placeholder="Min Growth Population" name="minGrowthPopulation">
    <input type="text" placeholder="Max Growth Population" name ="maxGrowthPopulation">

    <input type="text" placeholder="Min Bachelors Degree" name="minBachelorsDegree">
    <input type="text" placeholder="Max Bachelors Degree" name ="maxBachelorsDegree">

    <input type="text" placeholder="Min Total Housing Unit" name="minTotalHousingUnit">
    <input type="text" placeholder="Max Total Housing Unit" name ="maxTotalHousingUnit">

    <input type="text" placeholder="Min Owner Occupied HUs" name="minOwnerOccupiedHUs">
    <input type="text" placeholder="Max Owner Occupied HUs" name ="maxOwnerOccupiedHUs">

    <input type="text" placeholder="Min Air Quality" name="minAirQuality">
    <input type="text" placeholder="Max Air Quality" name ="maxAirQuality">
</div>




  </form>
  <?php

  if(isset($_POST['submit-search']))
    {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $bed =  mysqli_real_escape_string($conn, $_POST['inputbed']);
    $bath =  mysqli_real_escape_string($conn, $_POST['inputBath']);
    $sql = "SELECT * FROM cis4290 WHERE address = '$search' OR state='$search' OR zipcode = '$search' OR city = '$search' OR numbed >= '$bed' OR numbath >='$bath'";
    $result = mysqli_query($conn, $sql);
    $queryResult=mysqli_num_rows($result);

    if($queryResult > 0){
      while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card' style='width: 18rem;''>
        <img src=".$row['image-src']." alt='Avatar' style='width:100%'>
        <div class='container'>
        <h3>".$row['address']."</h3>
        <p>".$row['city'].", ".$row['state']." ".$row['zipcode']."</p>
        <p>".$row['price']."</p>
        <p>".$row['numbed']." bd ".$row['numbath']." bth ".$row['squarefootage']." SqFt </p>
        </div>
        </div>";
      }
    }

    else{
      echo "There are no results matching your search!";
    }
  }
  ?>
</div>

</body>
</html>
