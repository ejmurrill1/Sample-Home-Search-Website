<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">

  <div id="navbar">
   <a href="index.php">Home</a>
   <a href="loginPage.php">Login</a>
  </div>

</head>
<body>

  <form action = "Include/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="First Name">
    <br>
    <input type="text" name="last" placeholder="Last Name" >
    <br>
    <input type="text" name="email" placeholder="E-mail" >
    <br>
    <input type="text" name="uid" placeholder="Username" >
    <br>
    <input type="password" name="pwd" placeholder="Password" >
    <br>
    <button type="submit" name ="submit">Sign up</button>
  </form>

<?php
/*
  $sql = "SELECT * FROM users;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)) {
      echo $row['user_uid'] . "<br>";
        }
  }
  */


?>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
