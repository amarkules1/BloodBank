 var valid_name = /^[A-Za-z0-9 ]{3,10}/;
 var valid_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 var valid_user = /^[A-Za-z0-9_]{1,20}$/;
 var valid_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
 
 function validate(form){
	 
	 var first = form.first.value;
	 var last = form.last.value;
	 var email = form.email.value;
	 var pass1 = form.password1.value;
	 var pass2 = form.password2.value;
	 
	 var error = 0;

	 if(!valid_name.test(first)){
		 
		 error+=1;
		 var y1 = document.getElementById("A4");
		 y1.className = "form-group has-error has-feedback";

	 }
	 if(!valid_name.test(last)){
		 
		 		 error+=1;
		
		 var y2 = document.getElementById("A4");
		 y2.className = "form-group has-error has-feedback";
	 }
	 if(!valid_email.test(email)){
		 
		 		 error+=1;
	  
	 var y3 = document.getElementById("A4");
		 y3.className = "form-group has-error has-feedback";
	 }
	 if(!valid_password.test(pass1)){
		 
		 		 error+=1;
		 var y4 = document.getElementById("A4");
		 y4.className = "form-group has-error has-feedback";

	 }
	 if(!valid_password.test(pass2)&&(pass1 !=pass2)){
		 
		 		 error+=1;
		var x5 = document.getElementById("pass2");
	//	x5.style.backgroundColor = "red";
		x5.className = "error";


	 }
	 if (error > 0){	
	 
		 return false;
	 }
	 else {
		// document.form1.action = "art-form-process.php";
		return true;
		
	 }

	 
 }
 
 
 
