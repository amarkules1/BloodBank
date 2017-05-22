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
		if (password1.value.length > 0) clearErrorMessage('password1');
	}
	function init(){
		var sampleForm = document.getElementById('sampleForm');
		sampleForm.onsubmit = validateForm;
		 email.onchange = resetMessages;
		 password1.onchange = resetMessages;
	}
	
	function validateForm(myForm) {
		var email = document.getElementById('email');
		var password1 = document.getElementById('password1');
		var errorFlag = false;
		
		var emailReg = /(.+)@([^\.].*)\.([a-z]{2,})/;
		if(!emailReg.test(email.value)) {
			
			errorFlag = true;
			document.getElementById("email").style.backgroundColor="red";
			
		}
		
		var passReg = /^[a-zA-Z0-9]\w{4,16}$/;
		if (!passReg.test(password1.value)){
			
			errorFlag = true;
			document.getElementById("password1").style.backgroundColor="red";
		}
		
		if(!errorFlag){
			return true;
		}
		else{
			
			return false;
		}
	}
	window.onload = init;