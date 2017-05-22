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
	<form role="form" name="myForm" class="form-horizontal" action="admin_reg_form_process.php" onsubmit="return validateForm(this)" method="post" >
   <div class="page-header">
      <h2>Create Admin Account</h2>
      <?php
		if(isset($_SESSION['loggedin'])){
			if(strcmp($_SESSION['loggedin'],'true')){
				
			}
		}
		else{
			echo "<p>You must be logged in as an administrator to create additional administrator accounts.</p>";
		}
	?>
			
   </div>


     <div class="form-group">
       <label for="first" class="col-md-3 control-label">First Name</label>
       <div class="col-md-9">
	   <?php
	   if(isset($_GET['first'])){
	   $first = $_GET['first'];
	   if(!strcmp($first,'true')){
		   echo "<input type=\"text\" class=\"form-control\" name=\"first\" id=\"first\">";
	   }
	   else{
		   echo "<input type=\"text\" class=\"form-control\" name=\"first\" id=\"first\" style=\"background-color:red\">";
	   }
	   }
	   else{
		   echo "<input type=\"text\" class=\"form-control\" name=\"first\" id=\"first\">";
	   }
	   ?>
       </div>
     </div>
     <div class="form-group">
       <label for="last" class="col-md-3 control-label">Last Name</label>
       <div class="col-md-9">
	   <?php
	   if(isset($_GET['last'])){
	   $last = $_GET['last'];
	   if(!strcmp($last,'true')){
		   echo "<input type=\"text\" class=\"form-control\" name=\"last\" id=\"last\">";
	   }
	   else{
		   echo "<input type=\"text\" class=\"form-control\" name=\"last\" id=\"last\" style=\"background-color:red\">";
	   }
	   }
	   else{
		   echo "<input type=\"text\" class=\"form-control\" name=\"last\" id=\"last\">";
	   }
	   ?>
       
       </div>
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
       <label for="password2" class="col-md-3 control-label">Password Confirm</label>
       <div class="col-md-9">
	   <?php
	   if(isset($_GET['password2'])){
	   $password2 = $_GET['password2'];
	   if(!strcmp($password2,'true')){
		   echo "<input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\">";
	   }
	   else{
		   echo "<input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\" style=\"background-color:red\">";
	   }
	   }
	   else{
		   echo "<input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\">";
	   }
	   ?>
       </div>
     </div>
  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="privacy" > I agree to the <a href="#">privacy policy</a>
        </label>
      </div>
    </div>
  </div>     


  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <button type="submit" class="btn btn-primary">Register</button>
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
<script><?php include 'validateAdminForm.js'?></script>
</body>
</html>
