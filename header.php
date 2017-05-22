<header>
	<div class="container">
		<div id="title" style="float: left">
			<h1 id="title">Blood Bank Database</h1>
		</div>
		<div id="navLinks" style="float: right">
			<ul id="navBar">
				<li id="navElement"><a href="new_donor.php">New Donor</a></li>
				<?php
				//unset($_SESSION['loggedin']);
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
						echo "<li id=\"navElement\"><a href=\"login.php\">Log In</a></li>";
					}
				?>
			</ul>
		</div>
	</div>
</header>