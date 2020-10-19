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
$inputOrder = filter_input(INPUT_POST, 'inputOrder');
$orderType = filter_input(INPUT_POST, 'orderType');

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


