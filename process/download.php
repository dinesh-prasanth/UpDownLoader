<script language="javascript">
function focusme(){
document.getElementById('pass').focus();
}
</script>
<?php
if($_POST['confirm']){
echo "came\n";
$name = $_POST['filename'];
$pass = $_POST['pass'];
$doc = new domDocument();
$doc->load('../db.xml');
$filetest = $doc->getElementsByTagName('file');
foreach($filetest as $filetestloop){
	$names = $filetestloop->getElementsByTagName('name');
	$nameloop = $names->item(0)->nodeValue;
	$passs = $filetestloop->getElementsByTagName('password');
	$passloop = $passs->item(0)->nodeValue;
	if($nameloop==$name){
		if($passloop==$pass){
			echo "Click <a href=\"../files/".$nameloop.">here</a> to Download the file.";
		}
		else{
			header('Location:./download.php?name='.$nameloop.'&flag=incorrectpass');		
		}
		break;	
		}
}
}
else{
?>
<?php
echo "Processing Download of <b>".$_GET[name]."</b> file <br /><br />";
?>
<body onload="focusme();">
<form id="enterpass" method="post" action="./download.php">
<input type="hidden" name="filename" value="<?php echo $_GET[name]?>">
<label>Enter Password to Download : </label>
<input type="password" name="pass" id="pass" size="20">
<br><?php
if($_GET['flag']){
	if($_GET['flag']=='incorrectpass'){
		echo"<label style=\"color:red\">Incorrect Password Entered.Try Again.</label>";
	}
}
?>
<br>
<input type="submit" name="confirm" value="Download File">
</form>
</body>
<?php
}
?>
