function search() {
	const data = document.getElementById('category').value;
	const xhttp = new XMLHttpRequest();\
	xhttp.open('GET', 'history.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//document.write(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
	xhttp.send('category='+data);
}