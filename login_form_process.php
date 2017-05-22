<?php session_start(); ?>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>

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
<?php include 'header.php'?>
<?php

	$pdo = new PDO("mysql:host=localhost;dbname=bloodbank;charset=utf8", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM admins";
	$results = $pdo->query($sql);
	$_SESSION['loggedin'] = false;
	$email = $_POST['email'];
	$pass = $_POST['password1'];
	
	while($row = $results->fetch()){
		if($row['Email'] == $email & $row['Password'] == $pass){
			
			$_SESSION['loggedin'] = true;
			$_SESSION['email'] = $email;
		}
	}
	if($_SESSION['loggedin'] == true){
		echo "<h3>You are now logged in as an administrator.</h3>";
		echo "<p>You may now <a href=\"admin_registration.php\">register new administrators</a> and <a href=\"donor_list.php\">access all donor information</a>";
		
	}
	else{
		echo "<h3>Login Failed</h3>";
		echo "<p>Please <a href=\"login.php?email=false&password1=false\">go back</a></p>";
		unset($_SESSION['loggedin']);
	}
		
?>
<!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    


</body>
</html>