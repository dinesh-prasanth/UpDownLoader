function database(timer){
returndatabase();
setTimeout("database("+timer+");",timer*1000);
}

function returndatabase(){
//alert("starting");
if(window.ActiveXObject){
		var request = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else if(XMLHttpRequest){
		var request = new XMLHttpRequest();
	}
	the_url='./support/returndatabase.php';
	request.open("GET",the_url);
	request.onreadystatechange = function(){
	if(request.readyState==4){
			document.getElementById('database_area').innerHTML = request.responseText;
			}}
request.send(null);
}
