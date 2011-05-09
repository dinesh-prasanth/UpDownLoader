<script language="javascript">
function validateup(){
	if((document.getElementById("upf").value=="")||(document.getElementById("pass").value=="")){
		alert("Warning :: Mandatory requirements not completed");
	}
	else
	{
		var form1 = window.document.getElementById("upload");
		form1.submit();
	}
	}
c=10;
/*function count(){
	if(c!=0){
		document.getElementById('count').innerHTML=c;
		setTimeout("count();",1000);
		c--;
	}
	else{
		setTimeout("count();",1000);
		c=10;
	}
}
*/
</script>
