The .php files in this folder are webpages. 
They use links to pages called "donor_list.php" and "donor_registration.php" which have not yet been created.
The very first line of those two pages should include the call "<?php session_start(); ?>".
Include the header.php page at the begining of the body of each page.
To check if the user is logged in as an administrator, use isset($_SESSION['loggedin']).
The sql script creates a database with a table called admins. any of the admins listed are valid login combinations.
Run the script, create a second table for the donors and update the script.
There is bootstrap css and a stylesheet. The stylesheet only has css for the header, we can work on the rest later but feel free to add to it.

thanks, Alex