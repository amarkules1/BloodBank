<?php session_start(); ?>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Registration</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="stylesheet.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
 
</head>
<body>
<?php include 'header.php' ?>
<?php
	  $errorFlag = false;
	  $first = $_POST['first'];
	  $last = $_POST['last'];
	  $email = $_POST['email'];
	  $pass1 = $_POST['password1'];
	  $pass2 = $_POST['password2'];
	  $queryString = "admin_registration.php?";
	  
	  if(!isset($_SESSION['loggedin'])){
		  $errorFlag = true;
		  echo "<h3>You are not authorized to create a new administrator account.</h3>";
		  echo "<p>Please <a href=\"login.php\">Log In</a> and try again.</p>";
		  
	  }
	  else{
	   $flength = strlen($first);
	  if($flength<3||$flength>20){
		  $errorFlag = true;
		  echo "<p> Your first name is incorrect</p>";
		  $queryString = $queryString . "first=false";
	  }
	  else{
		  $queryString = $queryString . "first=true";
	  }
	  $llength = strlen($last);
	  if($llength<3||$llength>20){
		  $errorFlag = true;
		  echo "<p>Your last name is incorrect</p>";
		  $queryString = $queryString . "&last=false";
	  }
	  else{
		  $queryString = $queryString . "&last=true";
	  }
	  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errorFlag = true;
			echo "<p>Your email is incorrect</p>";
			$queryString = $queryString . "&email=false";
		}
		else{
			$queryString = $queryString . "&email=true";
		}
		$plength = strlen($pass1);
		if($plength<3||$plength>20){
			$errorFlag = true;
			echo "<p>Your password is invalid</p>";
			$queryString = $queryString . "&password1=false";
		}
		else{
			$queryString = $queryString . "&password1=true";
		}
		if($pass1!=$pass2){
			$errorFlag = true;
			echo "<p>Your password does not match the confirm password field</p>";
			$queryString = $queryString . "&password2=false";
		}
		else{
			$queryString = $queryString . "&password2=true";
		}
	  if($errorFlag){
		  echo "<p>Please <a href=\"" . $queryString . "\">go back</a> and enter correct information</p>";
	  }
	  else{
		  
	

	$pdo = new PDO("mysql:host=localhost;dbname=bloodbank;charset=utf8", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$first = mysql_real_escape_string($first);
	$last = mysql_real_escape_string($last);
	$email = mysql_real_escape_string($email);
	$pass1 = mysql_real_escape_string($pass1);
	

	try {
		$qry = $pdo->prepare('INSERT INTO admins (First, Last, Email, Password) VALUES (?, ?, ?, ?)');
		$qry->execute(array($first, $last, $email, $pass1));
		echo "New record created successfully";
	} 
	catch (PDOException $e) {
		echo "Error: " . $e;
	}

	

	  }
	  
	  
	  
	  }
	  ?>
	  
	  
	  
<!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</script>
<script><?php include 'validateAdminForm.js'?></script>
</body>
</html>
