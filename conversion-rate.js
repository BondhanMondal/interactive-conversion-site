function isValid() {
	var category = document.forms["conversion-rate"]["category"].value;
	var unit = document.forms["conversion-rate"]["unit"].value;
	var rate = document.forms["conversion-rate"]["rate"].value;

	var flag = false;

	if(category === "") {
		document.getElementById('categoryErr').innerHTML = "Catagory can not be empty.";
		flag = true;
	}

	if(unit === "") {
		document.getElementById('unitErr').innerHTML = "Unit can not be empty.";
		flag = true;
	}
	if(rate === "") {
		document.getElementById('rateErr').innerHTML = "Rate can not be empty.";
		flag = true;
	}





	if(flag == true) {
		return false;
	}
	else
		return true;
}