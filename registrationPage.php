<!DOCTYPE html>
<html>
    
<?php include 'header.php'; ?>       
    
<head>


  <?php
use Phppot\Member;

if (! empty($_POST["registration-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>

<HTML>
<HEAD>
<TITLE>Macro Homes - Registration</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>

<body>

<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="loginPage.php">Login</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Registration</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>

        <div class="row">
						<div class="inline-block">
							<div class="form-label">
								First Name<span class="required error" id="firstname-info"></span>
							</div>
							<input class="input-box-330" type="text" name="firstname"
								id="firstname">
						</div>
					</div>
        <div class="row">
						<div class="inline-block">
							<div class="form-label">
								Last Name<span class="required error" id="lastname-info"></span>
							</div>
							<input class="input-box-330" type="text" name="lastname"
								id="lastname">
						</div>
					</div>
        <div class="row">
						<div class="inline-block">
							<div class="form-label">
								E-mail<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="text" name="email"
								id="email">
						</div>
					</div>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="Registration-btn"
							id="Registration-btn" value="Registration">
					</div>
				</form>
			</div>
		</div>
	</div>

  <script>
function loginValidation() {
  var valid = true;
  $("#first name").removeClass("error-field");
  $("#last name").removeClass("error-field");
	$("#e-mail").removeClass("error-field");
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

  var FirstName = $("#firstname").val();
  var LastName = $("#lastname").val();
	var Email = $('#email').val();
	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

  if (FirstName.trim() == "") {
		$("#firstname-info").html("required.").css("color", "#ee0000").show();
		$("#firstname").addClass("error-field");
		valid = false;
	}
  if (LastName.trim() == "") {
		$("#lastname-info").html("required.").css("color", "#ee0000").show();
		$("#lastname").addClass("error-field");
		valid = false;
	}
  if (Email.trim() == "") {
		$("#email-info").html("required.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>

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
