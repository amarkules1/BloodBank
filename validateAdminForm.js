	// var first = document.forms['myForm']['first'].value;
	// var last = document.forms['myForm']['last'].value;
	// var email = document.forms['myForm']['email'].value;
	// var password1 = document.forms['myForm']['password1'].value;
	// var password2 = document.forms['myForm']['password2'].value;
	
	function addErrorMessage(id, msg){
		var divID = 'control' + id;
		var div = document.getElementById(divId);
		
		if(div) div.className = div.className + " error";
	}
	
	function clearErrorMessage(id){
		var divId = 'control' + id;
		var div = document.getElementById(divId)
	}
	
	function resetMessages(){
		if (email.value.length > 0) clearErrorMessage('email');
		if (first.value.length > 0) clearErrorMessage('first');
		if (last.value.length > 0) clearErrorMessage('last');
		if (password1.value.length > 0) clearErrorMessage('password1');
		if (password2.value.length > 0) clearErrorMessage('password2');
	}
	function init(){
		var sampleForm = document.getElementById('sampleForm');
		sampleForm.onsubmit = validateForm;
		 first.onchange = resetMessages;
		 last.onchange = resetMessages;
		 email.onchange = resetMessages;
		 password1.onchange = resetMessages;
		 password2.onchange = resetMessages;
	}
	
	function validateForm(myForm) {
		//alert("function is run");
		var first = document.getElementById('first');
		//alert("value assigned");
		var last = document.getElementById('last');
		var email = document.getElementById('email');
		var password1 = document.getElementById('password1');
		var password2 = document.getElementById('password2');
		//alert("vars assigned");
		var errorFlag = false;
		
		var emailReg = /(.+)@([^\.].*)\.([a-z]{2,})/;
		if(!emailReg.test(email.value)) {
			
			errorFlag = true;
			document.getElementById("email").style.backgroundColor="red";
			
		}
		
		 var nameReg = /^[A-Za-z0-9 ]{3,20}$/;
		if(!nameReg.test(first.value)){
			errorFlag = true;
			
			document.getElementById("first").style.backgroundColor="red";
		}
		
		if(!nameReg.test(last.value)){
			
			errorFlag = true;
			document.getElementById("last").style.backgroundColor="red";
		}
		
		var passReg = /^[a-zA-Z0-9]\w{4,16}$/;
		if (!passReg.test(password1.value)){
			
			errorFlag = true;
			document.getElementById("password1").style.backgroundColor="red";
		}
		
		if (password2.value!=password1.value){
			alert("oh no");
			errorFlag = true;
			document.getElementById("password2").style.backgroundColor="red";
		}
		
		if(!errorFlag){
			return true;
		}
		else{
			
			return false;
		}
	}
	window.onload = init;