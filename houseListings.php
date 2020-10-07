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
    <input type="text" name="search" placeholder="Search" aria-label="Search"
           <?php 
               if (!empty($_POST['search'])){
                   echo 'value=\'' . $_POST['search'] . '\'';
               }
               ?>>
    <button type="submit" name="submit-search">Search</button>

     <select name="inputBed">
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
        <label for="minPopulation">Minimum City Population</label>
        <input type="text" placeholder="Min Population" name="minPopulation" 
               <?php 
               if (!empty($_POST['minPopulation'])){
                   echo 'value=\'' . $_POST['minPopulation'] . '\'';
               }
               ?>>
        <label for="maxPopulation">Maximum City Population</label>
        <input type="text" placeholder="Max Population" name ="maxPopulation"
               <?php 
               if (!empty($_POST['maxPopulation'])){
                   echo 'value=\'' . $_POST['maxPopulation'] . '\'';
               }
               ?>>
        <label for="minMedianAge">Minimum Median Age</label>
        <input type="text" placeholder="Min Median Age" name="minMedianAge"
               <?php 
               if (!empty($_POST['minMedianAge'])){
                   echo 'value=\'' . $_POST['minMedianAge'] . '\'';
               }
               ?>>
        <label for="maxMedianAge">Maximum Median Age</label>
        <input type="text" placeholder="Max Median Age" name ="maxMedianAge"
               <?php 
               if (!empty($_POST['maxMedianAge'])){
                   echo 'value=\'' . $_POST['maxMedianAge'] . '\'';
               }
               ?>>
        <label for="minMedianHouseholdIncome">2020 Minimum Median Household Income</label>       
        <input type="text" placeholder="Min Median Household Income" name="minMedianHouseholdIncome"
               <?php 
               if (!empty($_POST['minMedianHousholdIncome'])){
                   echo 'value=\'' . $_POST['minMedianHousholdIncome'] . '\'';
               }
               ?>>
        <label for="maxMedianHouseholdIncome">2020 Maximum Median Household Income</label>
        <input type="text" placeholder="Max Median Household Income" name ="maxMedianHouseholdIncome"
               <?php 
               if (!empty($_POST['maxMedianHousholdIncome'])){
                   echo 'value=\'' . $_POST['maxMedianHousholdIncome'] . '\'';
               }
               ?>>
        
        <label for="minUnemploymentRate">2020 Minimum Unemployment Rate</label>
        <input type="text" placeholder="Min Unemployment Rate" name="minUnemploymentRate" 
               <?php 
               if (!empty($_POST['minUnemploymentRate'])){
                   echo 'value=\'' . $_POST['minUnemploymentRate'] . '\'';
               }
               ?>>
        <label for="maxUnemploymentRate">2020 Maximum Unemployment Rate</label>
        <input type="text" placeholder="Max Unemployment Rate" name ="maxUnemploymentRate"
               <?php 
               if (!empty($_POST['maxUnemploymentRate'])){
                   echo 'value=\'' . $_POST['maxUnemploymentRate'] . '\'';
               }
               ?>>
        <label>2020 Minimum Property Crime Index</label>
        <input type="text" placeholder="Min Crime Index" name="minCrimeIndex"
               <?php 
               if (!empty($_POST['minCrimeIndex'])){
                   echo 'value=\'' . $_POST['minCrimeIndex'] . '\'';
               }
               ?>>
        <label>2020 Maximum Property Crime Index</label>
        <input type="text" placeholder="Max Crime Index" name ="maxCrimeIndex"
               <?php 
               if (!empty($_POST['maxCrimeIndex'])){
                   echo 'value=\'' . $_POST['maxCrimeIndex'] . '\'';
               }
               ?>>
        <label>2020-2025 Growth Rate: Population</label>
        <input type="text" placeholder="Min Growth Rate" name="minPopulationGrowth"
               <?php 
               if (!empty($_POST['minPopulationGrowth'])){
                   echo 'value=\'' . $_POST['minPopulationGrowth'] . '\'';
               }
               ?>>
        <input type="text" placeholder="Max Growth Rate" name ="maxPopulationGrowth"
               <?php 
               if (!empty($_POST['maxPopulationGrowth'])){
                   echo 'value=\'' . $_POST['maxPopulationGrowth'] . '\'';
               }
               ?>>
        <label for="minBachelorsDegree">2020 Population Age 25+: Bachelor's Degree</label>      
        <input type="text" placeholder="Min Bachelors Degree" name="minBachelorsDegree"
               <?php 
               if (!empty($_POST['minBachelorsDegree'])){
                   echo 'value=\'' . $_POST['minBachelorsDegree'] . '\'';
               }
               ?>>
        <label for="minTotalHousingUnit">2020 Minimum Total Housing Units</label>
        <input type="text" placeholder="Min Total Housing Unit" name="minTotalHousingUnit"
               <?php 
               if (!empty($_POST['minTotalHousingUnit'])){
                   echo 'value=\'' . $_POST['minTotalHousingUnit'] . '\'';
               }
               ?>>
        <label for="maxTotalHousingUnit">2020 Maximum Total Housing Units</label>
        <input type="text" placeholder="Max Total Housing Unit" name ="maxTotalHousingUnit"
               <?php 
               if (!empty($_POST['maxTotalHousingUnit'])){
                   echo 'value=\'' . $_POST['maxTotalHousingUnit'] . '\'';
               }
               ?>>
        <label>2020 Ownder Occupied Housing Units</label>
        <input type="text" placeholder="Min Owner Occupied HUs" name="minOwnerOccupiedHUs"
               <?php 
               if (!empty($_POST['minOwnerOccupiedHUs'])){
                   echo 'value=\'' . $_POST['minOwnerOccupiedHUs'] . '\'';
               }
               ?>>
        <input type="text" placeholder="Max Owner Occupied HUs" name ="maxOwnerOccupiedHUs"
               <?php 
               if (!empty($_POST['maxOwnerOccupiedHUs'])){
                   echo 'value=\'' . $_POST['maxOwnerOccupiedHUs'] . '\'';
               }
               ?>>

        <label for="airQuality">Minimum Air Quality</label>
        <input type="text" placeholder="Enter index 1-100" name="airQuality" 
               <?php 
               if (!empty($_POST['airQuality'])){
                   echo 'value=\'' . $_POST['airQuality'] . '\'';
               }
               ?>>
    </div>
  </form>
    
  <?php
  $minPop = filter_input(INPUT_POST, 'minPopulation');
  $maxPop = filter_input(INPUT_POST, 'maxPopulation');
  $minMedAge = filter_input(INPUT_POST, 'minMedianAge');
  $maxMedAge = filter_input(INPUT_POST, 'maxMedianAge');
  $minMedHI = filter_input(INPUT_POST, 'minMedianHouseholdIncome');
  $maxMedHI = filter_input(INPUT_POST, 'maxMedianHouseholdIncome');
  $minUR = filter_input(INPUT_POST, 'minUnemploymentRate');
  $maxUR = filter_input(INPUT_POST, 'maxUnemploymentRate');
  $minCI = filter_input(INPUT_POST, 'minCrimeIndex');
  $maxCI = filter_input(INPUT_POST, 'maxCrimeIndex');
  $minPopGR = filter_input(INPUT_POST, 'minPopulationGrowth');
  $maxPopGR = filter_input(INPUT_POST, 'maxPopulationGrowth');
  $minBD = filter_input(INPUT_POST, 'minBachelorsDegree');
  $minTHU = filter_input(INPUT_POST, 'minTotalHousingUnit');
  $maxTHU = filter_input(INPUT_POST, 'maxTotalHousingUnit');
  $minOOHU = filter_input(INPUT_POST, 'minOwnerOccupiedHUs');
  $maxOOHU = filter_input(INPUT_POST, 'maxOwnerOccupiedHUs');
  $airQuality = filter_input(INPUT_POST, 'airQuality');
  
  //whichever filter option is set is added to an array that has all the conditions
  $conditions = array();
  if (!empty($minPop)) {
      $conditions[] = "population >= $minPop";
  }
  if (!empty($maxPop)) {
      $conditions[] = "population <= $maxPop";
  }
  if (!empty($minMedAge)) {
      $conditions[] = "MedianAge >= $minMedAge";
  }
  if (!empty($maxMedAge)) {
      $conditions[] = "MedianAge <= $maxMedAge";
  }
  if (!empty($minMedHI)) {
      $conditions[] = "MedianHouseholdIncome >= $minMedHI";
  }
  if (!empty($maxMedHI)) {
      $conditions[] = "MedianHouseholdIncome <= $maxMedHI";
  }
  if (!empty($minUR)) {
      $conditions[] = "UnemploymentRate >= $minUR";
  }
  if (!empty($maxUR)) {
      $conditions[] = "UnemploymentRate <= $maxUR";
  }
  if (!empty($minCI)) {
      $conditions[] = "PropertyCrimeIndex >= $minCI";
  }
  if (!empty($maxCI)) {
      $conditions[] = "PropertyCrimeIndex <= $maxCI";
  }
  if (!empty($minPopGR)) {
      $conditions[] = "PopulationGrowthRate >= $minPopGR";
  }
  if (!empty($maxPopGR)) {
      $conditions[] = "PopulationGrowthRate <= $maxPopGR";
  }
  if (!empty($minBD)) {
      $conditions[] = "BachelorDegree >= $minBD";
  }
  if (!empty($minTHU)) {
      $conditions[] = "TotalHousingUnits >= $minTHU";
  }
  if (!empty($maxTHU)) {
      $conditions[] = "TotalHousingUnits <= $maxTHU";
  }
  if (!empty($minOOHU)) {
      $conditions[] = "OwnerOccupiedHUs >= $minOOHU";
  }
  if (!empty($maxOOHU)) {
      $conditions[] = "OwnerOccupiedHUs <= $maxOOHU";
  }
  if(!empty($airQuality)) {
      $conditions[] = "airquality >= $airQuality";
  }

  if(isset($_POST['submit-search']))
    {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM combinedhomes WHERE (address = '$search' OR state= '$search' OR zipcode = '$search' OR city = '$search')";
    //append 'and' conditions to sql statement
    if(count($conditions) === 1){
        $sql .= ' AND ' . $conditions[0];
    } else if(count($conditions) > 1) {
        $sql .= ' AND ' . implode(' AND ', $conditions);
    }
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
    $conn->close();
  }
  ?>
</div>
</body>
</html>
