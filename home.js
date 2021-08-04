function isValid() {
	var value = document.forms["home"]["value"].value;
	
	var flag = false;

	if(value === "") {
		document.getElementById('valueErr').innerHTML = "Value can not be empty.";
		flag = true;
	}

	if(flag == true) {
		return false;
	}
	else
		return true;
}