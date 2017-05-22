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

<div class="container">
	<form role="form" name="myForm" class="form-horizontal" action="login_form_process.php" onsubmit="return validateForm(this)" method="post" >
   <div class="page-header">
      <h2>Administrator Login</h2>
			
   </div>
     <div class="form-group">
       <label for="email" class="col-md-3 control-label">Email</label>
       <div class="col-md-9">
	   <?php
	   if(isset($_GET['email'])){
	   $email = $_GET['email'];
	   if(!strcmp($email,'true')){
		   echo "<input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\">";
	   }
	   else{
		   echo "<input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" style=\"background-color:red\">";
		   echo "<p>The email you entered is not connected to an account. Please try again</p>";
	   }
	   }
	   else{
		   echo "<input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\">";
	   }
	   ?>
       
       </div>
     </div>        


     <div class="form-group">
       <label for="password1" class="col-md-3 control-label">Password</label>
       <div class="col-md-9">
	   <?php
	   if(isset($_GET['password1'])){
	   $password1 = $_GET['password1'];
	   if(!strcmp($password1,'true')){
		   echo "<input type=\"password\" class=\"form-control\" name=\"password1\" id=\"password1\">";
	   }
	   else{
		   echo "<input type=\"password\" class=\"form-control\" name=\"password1\" id=\"password1\" style=\"background-color:red\">";
	   }
	   }
	   else{
		   echo "<input type=\"password\" class=\"form-control\" name=\"password1\" id=\"password1\">";
	   }
	   ?>
       
       </div>
     </div>    


  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <button type="submit" class="btn btn-primary">Log in</button>
    </div>
  </div>
   
    
   </form>




</div>



<!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</script>
<script><?php include 'validateLoginForm.js'?></script>
</body>
</html>
