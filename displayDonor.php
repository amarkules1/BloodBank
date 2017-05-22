<?php session_start(); ?>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="stylesheet.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
 
  <?php
 

 
     function deleteAccount(){
		 
		try{
		$connString = "mysql:host=localhost;dbname=bloodbank";
	    $user ="root";
		$pass = "";
		$email = $_GET['Email'];
		$pdo = new PDO ($connString, $user,$pass);
		$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	$sql = "Delete 
	        From donors
			Where Email = '".$email."'";
		
		$result = $pdo->exec($sql);
	
		
		$pdo = null;
	}
	
	catch(PDOException $e){
		die($e -> getMessage());
	}
		 
		 
		 
	 }
	 
	 
	 function updateAccount(){
		 
		deleteAccount();
	//	header("Location:new_donor.php");

	 }		 
 ?>
</head>

<body>



<?php include 'header.php' ?>
<?php
   if(isset($_SESSION['loggedin'])){
						if($_SESSION['loggedin']==true){
							echo "<li id=\"navElement\"><a href=\"admin_registration.php\">New Admin</a></li>";
							echo "<li id=\"navElement\"><a href=\"donor_list.php\">Donor List</a></li>";
							echo "<li id=\"navElement\"><a href=\"logout.php\">Log Out</a></li>";
						}
						else{
							echo "<li id=\"navElement\"><a href=\"login.php\">Log In</a></li>";
						}
					}
				else{
						header ('location:http://localhost/cs3500/finalproject/finalproject/login.php');

				}
	?>
<div class="container">


   
   <div class="row">
      <div class="col-md-3">
      
         <div class="panel panel-default">
           <div class="panel-heading">Account</div>
           <div class="panel-body">

           <ul class="nav nav-pills nav-stacked">
               <li>menu items here</li>
           </ul>  
           
           
           </div>
         </div>      

      </div>
      <div class="col-md-9">
      
         <div class="page-header">
            <h2>My Account</h2>
            <p>Welcome </p>   
         </div>
         <?php 
		
		
		try{
		$connString = "mysql:host=localhost;dbname=bloodbank";
	    $user ="root";
		$pass = "";
		$email = $_GET['Email'];
		$pdo = new PDO ($connString, $user,$pass);
		$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	$sql = "SELECT First, Last, Email, Amount, BloodType
	        From donors
			Where Email = '".$email."'";
		/*
		$sql = "INSERT INTO donorsList (First,Last,Email, Bloodtype, Age, Amount)
		VALUES ('tempName3','tempName4','temp123@email1','O','30','2')";*/
		$result = $pdo->query($sql);
		$data = $result->fetch();
		
		$pdo = null;
	}
	
	catch(PDOException $e){
		die($e -> getMessage());
	}
		 
		 ?>
         <div class="well">
		 <form role="form" name="myForm" class="form-horizontal" action=""  method="post" >
		    <?php 
              echo "<p>First Name: ".$data['First']."</p>";
			  echo "<p>Last Name: ".$data['Last']."</p>";
			  echo "<p>Email: ".$data['Email']."</p>";
			  echo "<p>Amount Donated: ".$data['Amount']."</p>";
			  echo "<p>BloodType: ".$data['BloodType']."</p>";
			
              ?>
			  
	<div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <button type="submit" name = "delete" class="btn btn-primary">Delete Account</button>
    </div>
  </div>
  <?php
  
  if(isset($_POST['delete'])){
	  echo "<p>button is clicked</p>";
	  deleteAccount();
  }
  ?>
  
         </form>
         </div>
      </div>  
   </div> 
      

   
   
   


</div>  <!-- end container -->


 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>