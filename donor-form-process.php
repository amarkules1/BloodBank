
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
        $hasErrorFirst = false;
		$hasErrorSecond = false;
		$hasErrorEmail = false;
		$hasErrorAge = false;
		$hasErrorBloodType = false;
		$hasErrorAmount = false;
		
  function validate(){
	  if(isset($_POST['sub1'])){
		 $form_data = array($_POST["email"],$_POST["first"],$_POST["last"],$_POST["amount"],$_POST["bloodType"],$_POST["age"]);
		 
		 $email = $form_data[0];
		 $first = $form_data[1];
		 $second =$form_data[2];
		 $amount = $form_data[3];
		 $bloodType = $form_data[4];
		 $age = $form_data[5];
		 $errorFlag = false;
		 
		

		
	    $valid_name = '/^[A-Za-z0-9 ]{3,20}/';
		$valid_email = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
		$valid_user = '/^[A-Za-z0-9_]{1,20}$/';
		$valid_password = '/^[A-Za-z0-9!@#$%^&*()_]{6,20}$/';
		$valid_bType = '/^(A|B|AB|O)[+-]/';
		$validAge = '/^[1-100]/';
		
		
		if (!preg_match($valid_name,$first,$match)||(!isset($first))){
			echo'<p>First name is not valid</p>';
			$hasErrorFirst = true;
			$errorFlag = true;
		}
		
		if (!preg_match($valid_name,$second,$match)||(!isset($second))){
			echo'<p>Second name is not valid</p>';
						$hasErrorSecond = true;
						$errorFlag = true;

		}
		if (!preg_match($valid_email,$email,$match)||(!isset($email))){
			echo'<p>Email name is not valid</p>';
					$hasErrorEmail = true;
				   $errorFlag = true;

		}
		
		if (($amount > 5)||(!isset($age))){
			echo'<p>age is not valid</p>';
						$hasErrorAge = true;
                  	    $errorFlag = true;

		}
		
		if (($age > 80)||(!isset($age))){
			echo'<p>age is not valid</p>';
						$hasErrorAge = true;
                  	    $errorFlag = true;

		}
		if($errorFlag){
			header("Location:new_donor.php?hasErrorFirst=".$hasErrorFirst."&hasErrorSecond=".$hasErrorSecond."&hasErrorEmail=".$hasErrorEmail."&hasErrorAge=".$hasErrorAge."");
		}
		
		else {
			
			 $form_data =array($_POST["email"],$_POST["first"],$_POST["last"],$_POST["amount"],$_POST["bloodType"],$_POST["age"]);
		 
		 $email = $form_data[0];
		 $first = $form_data[1];
		 $last =$form_data[2];
		 $amount = $form_data[3];
		 $bloodType = $form_data[4];
		 $age = $form_data[5];
		
		try{
		$connString = "mysql:host=localhost;dbname=bloodbank";
	    $user ="root";
		$pass = "";
		
		$pdo = new PDO ($connString, $user,$pass);
		$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	$sql = "INSERT INTO donors (First,Last,Email, Bloodtype, Age, Amount)
		VALUES ('".$first."','".$last."','".$email."','".$bloodType."','".$age."','".$amount."')";
		/*
		$sql = "INSERT INTO donorsList (First,Last,Email, Bloodtype, Age, Amount)
		VALUES ('tempName3','tempName4','temp123@email1','O','30','2')";*/
		$pdo->exec($sql);
		
		$pdo = null;
	}
	
	catch(PDOException $e){
		die($e -> getMessage());
	}
		}
			}
  
  }
	
	validate();
		 
		 
 ?>
</head>

<body>



<?php include 'header.php' ?>

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
            <p>Welcome  <?php echo $_POST["first"];?> <?php echo $_POST["last"]; ?> </p>   
         </div>
         <?php 
		  
		
		 
		 ?>
         <div class="well">
		          <?php 
				  $form_data = array($_POST["email"],$_POST["first"],$_POST["last"],$_POST["bloodType"],$_POST["age"]);
              
			  
			  
			 $op = 0;
             foreach($form_data as $label){

		     if ($op == 0){echo "<p>Email : $label</p>";}
             else if ($op == 1){echo "<p>First Name : $label</p>";}
             else if ($op == 2){echo "<p>Last Name : $label</p>"; }   
             else if ($op == 3){echo "<p>Bloodtype: $label</p>";}
			 else if ($op == 4){echo "<p>Age: $label</p>";}

             $op+= 1;
			  }
              ?>

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