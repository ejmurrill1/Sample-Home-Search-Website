<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="#">Login</a>
    </div>
    <div class="jumbotron text-center">
      <h1>Search for a Home</h1>
    </div>
    
    <div class="container">
    <form action="houseListings.php" method="POST">
        <div class="input-group mb-4">
            <input type="search" name="search" placeholder="Enter a city, address, or zip code" aria-describedby="button-addon5" class="form-control">
            <div class="input-group-append">
                <button id="button-addon5" type="submit" name="submit-search" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    </div>
 
</body>
</html>

