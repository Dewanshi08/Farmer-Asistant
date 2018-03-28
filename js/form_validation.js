function checkPass()
{
	var pass1 = document.getElementById('password');
	var pass2 = document.getElementById('cpassword');
	var goodColor = "#66cc66";
	var badColor = "#ff6666";
	if(pass1.value == pass2.value){
		pass2.style.backgroundColor = goodColor;
		return true;
	}else{
		pass2.style.backgroundColor = badColor;
		return false;
	}
}

function password(){
	var pass1 = document.getElementById('password');
	var pass2 = document.getElementById('cpassword');

	if(pass1.value == pass2.value){
		return true;
	}
	else{
		alert("Passwords do not match!");
		return false;
	}
}

function aadhar_valid(){
	var num = document.getElementById('aadhar'),value;
	var reg = /^\d{12}$/;
	if(!reg.test(num))
	{
		alert("Please enter a valid aadhar number!");
		return false;
	}
	return true;
}

function pincode(){
	var pin = document.getElementById('p_code');
	var reg = /^([1-9])([0-9]){5}$/;
	if(reg.test(pin.value) == false){
		alert('Please enter a valid pincode!');
		pin.focus();	
		return false;
	}
	else{
		return true;
	}
}

function ValidateEmail() 
{
 var mail = document.getElementById('email');
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value))
  {
    return (true);
  }
    alert("Please enter a valid email address!");
    mail.focus();
    return (false);
}

function phonenumber()  
{  
  var mob = document.getElementById('mobile').value;
  var phoneno = /^\d{10}$/;  
  if(phoneno.test(mob))  
        {  
      return true;  
        }  
      else  
        {  
        alert("Please enter a valid mobile number!");  
        return false;  
        }  
}

function unifinal(){
	var check = pincode();
	if(check){
		if(password()){
			alert('all ok');
			return true;
		}
		else{
			alert('nopass');
			return false;
		}
	}
	else{
		alert(check);
		alert('nook');
		return false;
	}
}

function  deal() {
	if(phonenumber()){
		if(aadhar_valid()){
			if(pincode()){
				if(ValidateEmail()){
					if(password()){
						return true;
					}
					else{
						return false;
					}
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}

/*	if(phonenumber() && pincode() && ValidateEmail() && password())
	{
		return true;
	}
	else{
		return false;
	}*/
}

function trnsfinal(){
	if(phonenumber()){
		if(pincode()){
			return true;
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
}

function pmatch(){
	//alert('match');
	p1 = document.getElementById('password');
	p2 = document.getElementById('cpassword');

	if(p1.value != p2.value){
		alert('Passwords do not match!!');
		return false;
	}
	else{
		return true;
	}
	alert(p2.value)
}