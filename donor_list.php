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

              if(!isset($_SESSION['loggedin'])){
			  header ('location:http://localhost/cs3500/finalproject/finalproject/login.php');}
			  elseif($_SESSION['loggedin']==false){
			  header ('location:http://localhost/cs3500/finalproject/finalproject/login.php');}
						
					
				
?>
    <!-- book panel  -->
	<div class = "container" id="spaced">
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading">
		   <h4>My Customers</h4>
		     <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Search Customer" name="search">
               </div>
               <button type="submit" name = "submitButton"class="btn btn-default">Submit</button>
             </form>    
			 
			  <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Search BloodType" name="searchBloodType">
               </div>
               <button type="submit" name = "submitButtonBL" class="btn btn-default">Submit</button>
             </form>    
		   </div>
           <table class="table" width = "500px">
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Blood Type</th>
               <th>Age</th>
             </tr>
	 <?php
	
	try {
		
		
		$connString = "mysql:host=localhost;dbname=bloodbank";
	    $user ="root";
		$pass = "";
		
		$pdo = new PDO ($connString, $user,$pass);
		$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	
		
		if (isset($_GET['submitButton'])){
				$val = $_GET['search'];
			$sql = "select * from donors
					        where First like  '$val%'";
					$result = $pdo->query($sql);
			
		}
		
		if (isset($_GET['submitButtonBL'])){
				$val = $_GET['searchBloodType'];
			$sql = "select * from donors
					        where BloodType like  '$val%'";
					$result = $pdo->query($sql);
			
		}
		else{
			$sql = "select * from donors";
			$result = $pdo->query($sql);
		}
		
		
		
		
		while($row = $result->fetch()){
			echo "<tr>";
			echo "<td><a href = 'displayDonor.php?Email=".$row['Email']."'>". $row['First']." ".$row['Last'] . "</a></td>";
			echo "<td>". $row['Email'] . "</td>";
			echo "<td>". $row['BloodType'] . "</td>";
			echo "<td>". $row['Age'] . "</td>";
			echo "</tr>";
		 }//end whi
		$pdo = null;
	}
	
	catch(PDOException $e){
		die($e -> getMessage());
	}
	
?>
		
	</div>
<!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    


</body>
</html>