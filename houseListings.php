<?php
include 'database.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container-fluid">
    <div class="row py-5">
        <div class="col-lg-9 mx-auto text-center">
            <h1 class="display-4">Search Results</h1>
        </div>
    </div>
<div class="houseList">
<div class="row mb-5">
    <div class="col-lg-8 mx-auto bg-white p-5 rounded shadow">
    <form action="houseListings.php" method="POST">
        <div class="row">
            <div class="input-group mb-4">
                <input type="text" name="search" placeholder="Search" aria-label="Search" class="form-control form-control-md"
                       <?php 
                           if (!empty($_POST['search'])){
                               echo 'value=\'' . $_POST['search'] . '\'';
                           }
                           ?>>
                <div class="input-group-append">
                    <button id="button-addon5" type="submit" name="submit-search" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-auto mb-3">
                <label for="inputBed">Beds</label>
                <select name="inputBed" class="custom-select d-block w-100">
                    <option value="0">Any</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                    <option value="6">6+</option>
                 </select>
            </div>
            <div class="col-sm-auto mb-3">
                <label for="inputBath">Baths</label>
                <select name="inputBath" class="custom-select d-block w-100">
                    <option value="0">Any</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                    <option value="6">6+</option>
                </select>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minPrice">Minimum Price</label>
                <input type="text" placeholder="Min Price" name="minPrice" class="form-control"
                       <?php
                       if (!empty($_POST['minPrice'])){
                           echo 'value=\'' . $_POST['minPrice'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
            <label for="maxPrice">Maximum Price</label>
            <input type="text" placeholder="Max Price" name ="maxPrice" class="form-control"
                   <?php
                   if (!empty($_POST['maxPrice'])){
                       echo 'value=\'' . $_POST['maxPrice'] . '\'';
                   }
                   ?>>
            </div>
            <div class="col-md-auto mb-3">
             <label for="minSqFt">Minimum Square Footage</label>
             <input type="text" placeholder="Min Square Footage" name="minSqFt" class="form-control"
                    <?php
                    if (!empty($_POST['minSqFt'])){
                        echo 'value=\'' . $_POST['minSqFt'] . '\'';
                    }
                    ?>>
            </div>
            <div class="col-md-auto mb-3">
             <label for="maxSqFt">Maximum Square Footage</label>
             <input type="text" placeholder="Max Square Footage" name ="maxSqFt" class="form-control"
                    <?php
                    if (!empty($_POST['maxSqFt'])){
                        echo 'value=\'' . $_POST['maxSqFt'] . '\'';
                    }
                    ?>>
            </div>
        </div>
        <div class="row">
                <div class="col-md-auto mb-3">
                    <label for="minPopulation">Minimum City Population</label>
                    <input type="text" placeholder="Min Population" name="minPopulation" class="form-control"
                           <?php 
                           if (!empty($_POST['minPopulation'])){
                               echo 'value=\'' . $_POST['minPopulation'] . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="maxPopulation">Maximum City Population</label>
                    <input type="text" placeholder="Max Population" name ="maxPopulation" class="form-control"
                           <?php 
                           if (!empty($_POST['maxPopulation'])){
                               echo 'value=\'' . $_POST['maxPopulation'] . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="minMedianAge">Minimum Median Age</label>
                    <input type="text" placeholder="Min Median Age" name="minMedianAge" class="form-control"
                           <?php  
                           if (!empty($_POST['minMedianAge'])){
                               echo 'value=\'' . $_POST['minMedianAge'] . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="maxMedianAge">Maximum Median Age</label>
                    <input type="text" placeholder="Max Median Age" name ="maxMedianAge" class="form-control"
                           <?php 
                           if (!empty($_POST['maxMedianAge'])){
                               echo 'value=\'' . $_POST['maxMedianAge'] . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                <label for="minMedianHouseholdIncome">2020 Minimum Median Household Income</label>       
                <input type="text" placeholder="Min Median Household Income" name="minMedianHouseholdIncome" class="form-control"
                       <?php 
                       if (!empty($_POST['minMedianHousholdIncome'])){
                           echo 'value=\'' . $_POST['minMedianHousholdIncome'] . '\'';
                       }
                       ?>>
                </div>
                <div class="col-md-auto mb-3">
                <label for="maxMedianHouseholdIncome">2020 Maximum Median Household Income</label>
                <input type="text" placeholder="Max Median Household Income" name ="maxMedianHouseholdIncome" class="form-control"
                       <?php 
                       if (!empty($_POST['maxMedianHousholdIncome'])){
                           echo 'value=\'' . $_POST['maxMedianHousholdIncome'] . '\'';
                       }
                       ?>>
                </div>
        </div>
        <div class="row">
            <div class="col-md-auto mb-3">
                <label for="minUnemploymentRate">2020 Minimum Unemployment Rate</label>
                <input type="text" placeholder="Min Unemployment Rate" name="minUnemploymentRate" class="form-control"
                       <?php 
                       if (!empty($_POST['minUnemploymentRate'])){
                           echo 'value=\'' . $_POST['minUnemploymentRate'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="maxUnemploymentRate">2020 Maximum Unemployment Rate</label>
                <input type="text" placeholder="Max Unemployment Rate" name ="maxUnemploymentRate" class="form-control"
                       <?php 
                       if (!empty($_POST['maxUnemploymentRate'])){
                           echo 'value=\'' . $_POST['maxUnemploymentRate'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Minimum Property Crime Index</label>
                <input type="text" placeholder="Min Crime Index" name="minCrimeIndex" class="form-control"
                       <?php 
                       if (!empty($_POST['minCrimeIndex'])){
                           echo 'value=\'' . $_POST['minCrimeIndex'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Maximum Property Crime Index</label>
                <input type="text" placeholder="Max Crime Index" name ="maxCrimeIndex" class="form-control"
                       <?php 
                       if (!empty($_POST['maxCrimeIndex'])){
                           echo 'value=\'' . $_POST['maxCrimeIndex'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minPopulationGrowth">2020-2025 Growth Rate: Population</label>
                <input type="text" placeholder="Min Growth Rate" name="minPopulationGrowth" class="form-control"
                       <?php 
                       if (!empty($_POST['minPopulationGrowth'])){
                           echo 'value=\'' . $_POST['minPopulationGrowth'] . '\'';
                       }
                       ?>>

                <input type="text" placeholder="Max Growth Rate" name ="maxPopulationGrowth" class="form-control"
                       <?php 
                       if (!empty($_POST['maxPopulationGrowth'])){
                           echo 'value=\'' . $_POST['maxPopulationGrowth'] . '\'';
                       }
                       ?>>
            </div>
        </div>
        <div class="row">
            <div class="col-md-auto mb-3">
                <label for="minBachelorsDegree">2020 Population Age 25+: Bachelor's Degree</label>      
                <input type="text" placeholder="Min Bachelors Degree" name="minBachelorsDegree" class="form-control"
                       <?php 
                       if (!empty($_POST['minBachelorsDegree'])){
                           echo 'value=\'' . $_POST['minBachelorsDegree'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minTotalHousingUnit">2020 Minimum Total Housing Units</label>
                <input type="text" placeholder="Min Total Housing Unit" name="minTotalHousingUnit" class="form-control"
                       <?php 
                       if (!empty($_POST['minTotalHousingUnit'])){
                           echo 'value=\'' . $_POST['minTotalHousingUnit'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="maxTotalHousingUnit">2020 Maximum Total Housing Units</label> 
                <input type="text" placeholder="Max Total Housing Unit" name ="maxTotalHousingUnit" class="form-control"
                       <?php 
                       if (!empty($_POST['maxTotalHousingUnit'])){
                           echo 'value=\'' . $_POST['maxTotalHousingUnit'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Owner Occupied Housing Units</label>
                <input type="text" placeholder="Min Owner Occupied HUs" name="minOwnerOccupiedHUs" class="form-control"
                       <?php 
                       if (!empty($_POST['minOwnerOccupiedHUs'])){
                           echo 'value=\'' . $_POST['minOwnerOccupiedHUs'] . '\'';
                       }
                       ?>>
                <input type="text" placeholder="Max Owner Occupied HUs" name ="maxOwnerOccupiedHUs" class="form-control"
                       <?php 
                       if (!empty($_POST['maxOwnerOccupiedHUs'])){
                           echo 'value=\'' . $_POST['maxOwnerOccupiedHUs'] . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="airQuality">Minimum Air Quality</label>
                <input type="text" placeholder="Enter index 1-100" name="airQuality" class="form-control"
                       <?php 
                       if (!empty($_POST['airQuality'])){
                           echo 'value=\'' . $_POST['airQuality'] . '\'';
                       }
                       ?>>
            </div>
        </div>
    </div>
    </div>
  </form>
    
  <?php
  $bed = filter_input(INPUT_POST, 'inputBed');
  $bath = filter_input(INPUT_POST, 'inputBath');
  $minPrice = filter_input(INPUT_POST, 'minPrice');
  $maxPrice = filter_input(INPUT_POST, 'maxPrice');
  $minSqFt = filter_input(INPUT_POST, 'minSqFt');
  $maxSqFt = filter_input(INPUT_POST, 'maxSqFt');
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
  if (!empty($bed)) {
      $conditions[] = "numbed >= $bed";
  }
  if (!empty($bath)) {
      $conditions[] = "numbath >= $bath";
  }
  if (!empty($minPrice)) {
    $conditions[] = "price >= $minPrice";
  }
  if (!empty($maxPrice)) {
    $conditions[] = "price <= $maxPrice";
   }
   if (!empty($minSqFt)) {
       $conditions[] = "squarefootage >= $minSqFt";
   }
   if (!empty($maxSqFt)) {
       $conditions[] = "squarefootage <= $maxSqFt";
   }
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
    $sql = "SELECT * FROM cis4290 WHERE (address = '$search' OR state = '$search' OR zipcode = '$search' OR city = '$search')";
    //append 'and' conditions to sql statement
    if(count($conditions) === 1){
        $sql .= ' AND ' . $conditions[0];
    } else if(count($conditions) > 1) {
        $sql .= ' AND ' . implode(' AND ', $conditions);
    }
    $result = mysqli_query($conn, $sql);
    $connectsqli = $conn->query($sql);
    if(!empty($connectsqli) && $connectsqli->num_rows > 0){
      while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card mb-3' style='width: 18rem;''>
        <img class='card-img-top' src=".$row['image-src']." alt='Avatar' style='width:100%'>
        <div class='container'>
        <h3>".$row['address']."</h3>
        <p>".$row['city'].", ".$row['state']." ".$row['zipcode']."</p>
        <p>".$row['price']."</p>
        <p>".$row['numbed']." bd ".$row['numbath']." bth ".$row['squarefootage']." SqFt </p>
        </div>
        </div>";
      }
    }  else{
            echo "There are no results matching your search!";
    }
    $conn->close();
  }
  ?>
        </div>
    </div>
</body>
</html>
