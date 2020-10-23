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
                           if (filter_input(INPUT_POST, 'search') !== null){
                               echo 'value=\'' . filter_input(INPUT_POST, 'search') . '\'';
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
                       if (filter_input(INPUT_POST, 'minPrice') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'minPrice') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
            <label for="maxPrice">Maximum Price</label>
            <input type="text" placeholder="Max Price" name ="maxPrice" class="form-control"
                   <?php
                   if (filter_input(INPUT_POST, 'maxPrice') !== null){
                       echo 'value=\'' . filter_input(INPUT_POST, 'maxPrice') . '\'';
                   }
                   ?>>
            </div>
            <div class="col-md-auto mb-3">
             <label for="minSqFt">Minimum Square Footage</label>
             <input type="text" placeholder="Min Square Footage" name="minSqFt" class="form-control"
                    <?php
                    if (filter_input(INPUT_POST, 'minSqFt') !== null){
                        echo 'value=\'' . filter_input(INPUT_POST, 'minSqFt') . '\'';
                    }
                    ?>>
            </div>
            <div class="col-md-auto mb-3">
             <label for="maxSqFt">Maximum Square Footage</label>
             <input type="text" placeholder="Max Square Footage" name ="maxSqFt" class="form-control"
                    <?php
                    if (filter_input(INPUT_POST, 'maxSqFt') !== null){
                        echo 'value=\'' . filter_input(INPUT_POST, 'maxSqFt') . '\'';
                    }
                    ?>>
            </div>
        </div>
        <div class="row">
                <div class="col-md-auto mb-3">
                    <label for="minPopulation">Minimum City Population</label>
                    <input type="text" placeholder="Min Population" name="minPopulation" class="form-control"
                           <?php
                           if (filter_input(INPUT_POST, 'minPopulation') !== null){
                               echo 'value=\'' . filter_input(INPUT_POST, 'minPopulation') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="maxPopulation">Maximum City Population</label>
                    <input type="text" placeholder="Max Population" name ="maxPopulation" class="form-control"
                           <?php
                           if (filter_input(INPUT_POST, 'maxPopulation') !== null){
                               echo 'value=\'' . filter_input(INPUT_POST, 'maxPopulation') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="minMedianAge">Minimum Median Age</label>
                    <input type="text" placeholder="Min Median Age" name="minMedianAge" class="form-control"
                           <?php
                           if (filter_input(INPUT_POST, 'minMedianAge') !== null){
                               echo 'value=\'' . filter_input(INPUT_POST, 'minMedianAge') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="maxMedianAge">Maximum Median Age</label>
                    <input type="text" placeholder="Max Median Age" name ="maxMedianAge" class="form-control"
                           <?php
                           if (filter_input(INPUT_POST, 'maxMedianAge') !== null){
                               echo 'value=\'' . filter_input(INPUT_POST, 'maxMedianAge') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                <label for="minMedianHouseholdIncome">2020 Minimum Median Household Income</label>
                <input type="text" placeholder="Min Median Household Income" name="minMedianHouseholdIncome" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'minMedianHouseholdIncome') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'minMedianHouseholdIncome') . '\'';
                       }
                       ?>>
                </div>
                <div class="col-md-auto mb-3">
                <label for="maxMedianHouseholdIncome">2020 Maximum Median Household Income</label>
                <input type="text" placeholder="Max Median Household Income" name ="maxMedianHouseholdIncome" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'maxMedianHouseholdIncome') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'maxMedianHouseholdIncome') . '\'';
                       }
                       ?>>
                </div>
        </div>
        <div class="row">
            <div class="col-md-auto mb-3">
                <label for="minUnemploymentRate">2020 Minimum Unemployment Rate</label>
                <input type="text" placeholder="Min Unemployment Rate" name="minUnemploymentRate" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'minUnemploymentRate') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'minUnemploymentRate') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="maxUnemploymentRate">2020 Maximum Unemployment Rate</label>
                <input type="text" placeholder="Max Unemployment Rate" name ="maxUnemploymentRate" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'maxUnemploymentRate') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'maxUnemploymentRate') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Minimum Property Crime Index</label>
                <input type="text" placeholder="Min Crime Index" name="minCrimeIndex" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'minCrimeIndex') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'minCrimeIndex') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Maximum Property Crime Index</label>
                <input type="text" placeholder="Max Crime Index" name ="maxCrimeIndex" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'maxCrimeIndex') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'maxCrimeIndex') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minPopulationGrowth">2020-2025 Growth Rate: Population</label>
                <input type="text" placeholder="Min Growth Rate" name="minPopulationGrowth" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'minPopulationGrowth') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'minPopulationGrowth') . '\'';
                       }
                       ?>>

                <input type="text" placeholder="Max Growth Rate" name ="maxPopulationGrowth" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'maxPopulationGrowth') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'maxPopulationGrowth') . '\'';
                       }
                       ?>>
            </div>
        </div>
        <div class="row">
            <div class="col-md-auto mb-3">
                <label for="minBachelorsDegree">2020 Population Age 25+: Bachelor's Degree</label>
                <input type="text" placeholder="Min Bachelors Degree" name="minBachelorsDegree" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'minBachelorsDegree') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'minBachelorsDegree') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minTotalHousingUnit">2020 Minimum Total Housing Units</label>
                <input type="text" placeholder="Min Total Housing Unit" name="minTotalHousingUnit" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'minTotalHousingUnit') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'minTotalHousingUnit') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="maxTotalHousingUnit">2020 Maximum Total Housing Units</label>
                <input type="text" placeholder="Max Total Housing Unit" name ="maxTotalHousingUnit" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'maxTotalHousingUnit') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'maxTotalHousingUnit') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Owner Occupied Housing Units</label>
                <input type="text" placeholder="Min Owner Occupied HUs" name="minOwnerOccupiedHUs" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'maxOwnerOccupiedHUs') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'maxOwnerOccupiedHUs') . '\'';
                       }
                       ?>>
                <input type="text" placeholder="Max Owner Occupied HUs" name ="maxOwnerOccupiedHUs" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'maxOwnerOccupiedHUs') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'maxOwnerOccupiedHUs') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="airQuality">Minimum Air Quality</label>
                <input type="text" placeholder="Enter index 1-100" name="airQuality" class="form-control"
                       <?php
                       if (filter_input(INPUT_POST, 'search') !== null){
                           echo 'value=\'' . filter_input(INPUT_POST, 'airQuality') . '\'';
                       }
                       ?>>
            </div>
        </div>
            <div class="row">
            <div class="col-sm-auto mb-3">
                <label for="inputOrder">Sort</label>
                <select name="inputOrder" class="custom-select d-block w-100">
                    <option>Any</option>
                    <option value="beds">Bed</option>
                    <option value="baths">Bath</option>
                    <option value="price">Price</option>
                    <option value="squarefootage">Square Footage</option>
                 </select>
            </div>
            <div class="col-sm-auto mb-3">
                <label for="orderType">Order By</label>
                <select name="orderType" class="custom-select d-block w-100">
                    <option>Any</option>
                    <option value="ascend">Ascend</option>
                    <option value="descend">Descend</option>
                </select>
            </div>
        </div>
    </div>
    </div>
  </form>

  <?php
    require 'filterOptions.php';

    if(filter_input(INPUT_POST, 'submit-search') !== null) {
    $search = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'search'));

    $where="WHERE (address = '$search' OR state = '$search' OR zipcode = '$search' OR city = '$search')";
    
    //append 'and' conditions to sql statement
    if(count($conditions) === 1){
        $where .= ' AND ' . $conditions[0];
    } else if(count($conditions) > 1) {
        $where .= ' AND ' . implode(' AND ', $conditions);
    }
    
    
    if($inputOrder !== 'Any'){
        $order = "ORDER BY ";
        switch ($inputOrder){
        case "address":
          $order .= "address";
          break;
        case "city":
          $order .= "city";
          break;
        case "zipcode":
          $order .= "zipcode";
          break;
        case "state":
          $order .= "state";
          break;
        case "beds":
          $order .= "numbed";
          break;
        case "baths":
          $order .= "numbath";
          break;
        case "price":
          $order .= "price";
          break;
        case "squarefootage":
          $order .= "squarefootage";
          break;
        }
        $orderby = "";
        switch ($orderType) {
        case "ascend":
          $orderby = " ASC";;
          break;
        case "descend":
          $orderby = " DESC";;
          break;
        }
    }
    if ($inputOrder !== null && $inputOrder !== 'Any' && $orderType !== null && $orderType !== 'Any'){
        $sql = "SELECT * FROM combinedhomes $where $order $orderby";
    } else {
        $sql = "SELECT * FROM combinedhomes $where";
    }
    $result = mysqli_query($conn, $sql);
    $connectsqli = $conn->query($sql);
    //display sort message
    if($inputOrder !== null && $inputOrder !== 'Any' && $orderType !== null && $orderType !== 'Any') { ?>
        <p style="color: white">Sorting by <?php echo $inputOrder . " " . $orderType . "ing"; ?></p>  
    <?php     
    }
    
    if(!empty($connectsqli) && $connectsqli->num_rows > 0){
      while($row = mysqli_fetch_assoc($result)) { ?>
        <div class='card mb-3' style='width: 18rem;'>
        <img class='card-img-top' src="<?php echo $row['image-src'] ?>" alt='Avatar' style='width:100%'>
            <div class='container'>
                <h3><?php echo $row['address'] ?></h3>
                <p><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></p>
                <p><?php echo $row['price'] ?></p>
                <p><?php echo $row['numbed'] . " bd " . $row['numbath'] . " bth " . $row['squarefootage'] . " SqFt" ?></p>
            </div>
        </div>
    <?php
      }
    }
  }
    else{
            echo "There are no results matching your search!";
    }
    echo $sql;
    $test = filter_input(INPUT_POST, 'inputOrder');
    echo $test;
  $conn->close();
?>

        </div>
    </div>
</body>
</html>
