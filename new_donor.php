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
<form role="form" class="form-horizontal" name="form1" action="donor-form-process.php" method="post" onSubmit= "return validate(this);"?>
   <div class="page-header">
      <h2>Register Donor</h2>
      <p></p>   
   </div>

   
	 <?php
	 if(isset($_GET['hasErrorFirst'])){
	 if($_GET['hasErrorFirst']==1){
    echo" <div class='form-group has-error has-feedback'>";
	 }
	  else{
		echo " <div class='form-group '>";
	 }
	 }
	 else{
		echo " <div class='form-group '>";
	 }
	 ?>
       <label for="first" class="col-md-3 control-label">First Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" id="name1" name="first" >
       </div>
     </div>
	  <?php
	 if(isset($_GET['hasErrorSecond'])){
	 if($_GET['hasErrorSecond']==1){
    echo"<div class='form-group has-error has-feedback'>";
		}
		 else{
		echo " <div class='form-group '>";
	 }
	 }
	 else{
		echo " <div class='form-group '>";
	 }
	 ?>
       <label for="last" class="col-md-3 control-label">Last Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" id="name2" name="last" >
       </div>
     </div>
      <?php
	 if(isset($_GET['hasErrorEmail'])){
	 if($_GET['hasErrorEmail']==1){
    echo"<div class='form-group has-error has-feedback'>";
		}
		 else{
		echo " <div class='form-group '>";
	 }
	 }
	 else{
		echo " <div class='form-group '>";
	 }
	 ?>
       <label for="email" class="col-md-3 control-label">Email</label>
       <div class="col-md-9">
       <input type="email" class="form-control" id="email" name="email">
       </div>
     </div>        

 <?php
	  if(isset($_GET['hasErrorAmount'])){
	 if($_GET['hasErrorAmount'] ==1){
    echo " <div class='form-group has-error has-feedback'>";
	 }
	  else{
		echo " <div class='form-group '>";
	 }
	  }
	 else{
		echo " <div class='form-group '>";
	 }
	 ?>
       <label for="age" class="col-md-3 control-label">Amount</label>
       <div class="col-md-9">
       <input type="number" min = "1" max = "5" class="form-control" id = "age" name="amount" >
       </div>
     </div>
	 
     <div class="form-group">
       <label for="bloodType" class="col-md-3 control-label">Blood Type</label>
       <div class="col-md-9">
		<select name="bloodType" class="form-control" id="bloodType">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="AB">AB</option>
			<option value="O">O</option>
		</select>
       </div>
     </div>
	 
	 
	 
	 
	   <?php
	  if(isset($_GET['hasErrorAge'])){
	 if($_GET['hasErrorAge'] ==1){
    echo " <div class='form-group has-error has-feedback'>";
	 }
	  else{
		echo " <div class='form-group '>";
	 }
	  }
	 else{
		echo " <div class='form-group '>";
	 }
	 ?>
       <label for="password2" class="col-md-3 control-label">Age</label>
       <div class="col-md-9">
       <input type="number" min = "15" max = "50" class="form-control" id = "age" name="age">
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
      <button type="submit" class="btn btn-primary" name="sub1">Register</button>
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
<script><?php include 'validateDonorForm.js'?></script>
</body>
</html>
