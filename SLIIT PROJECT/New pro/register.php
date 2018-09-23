<?php required='connection.php'
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['name'])|| empty($_POST['email'])|| empty($_POST['contact'])|| empty($_POST['password'] || true)
		|| empty($_POST['confirm'])){ 
 // Setting error message
$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: register.php"); // Redirecting to first page 
	} else {

		$name= $_POST['name'];
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
 // Sanitizing email field to remove unwanted characters.
	$email = $_POST['email'];
	}else{
		$_SESSION['error'] = "Invalid Email Address";
 header("location: register.php");//redirecting to first page
}
if (preg_match("/^[0-9]{10}$/", $_POST['contact'])){ 
$contact= $_POST['contact'];
}else{	
	$_SESSION['error'] = "10 digit contact number is required.";
	header("location: /register.php");

}if (($_POST['password']) === ($_POST['confirm']))  {
$password=$_POST['password'];

} else {
	$_SESSION['error'] = "Password does not match with Confirm Password.";
 header("location: register.php"); //redirecting to first page

}
	}


?>
<!DOCTYPE HTML>
<html>
<head>
	<title>PHP Multi Page Form</title>
	<link rel="stylesheet" href="styles/stylesheet.css" />
</head>
<body>
	<div class="container">
		<div class="main">
			<h2>PHP Multi Page Form</h2><hr/>
			<h3>Well come </h3>
			<span id="error">
			
			</span>
			
		</div>
	</div>
	
</body>
</html>
