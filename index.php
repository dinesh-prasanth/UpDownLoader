<html>
<head><title>Anti Pendrive Fun</title></head>
<link rel="shortcut icon" href="images/favicon.ico" >
<?php 
//include supports
include "./support/main.php";
?>
<script type="text/javascript" src="./support/main.js"></script>
<link rel="stylesheet" href="./support/style.css">
<?php

/*
// DOM testing
$dom = new DOMDocument('1.0');
$files = $dom->appendChild($dom->createElement('files'));
$file = $files->appendChild($dom->createElement('file'));
$name = $file->appendChild($dom->createElement('name'));
$name->appendChild($dom->createTextNode('Sample File Name'));
$dom->formatOutput = true;
$testdb = $dom->saveXML();
$dom->save('testdb.xml');
*/
?> 

<body onload="">
<form name="upload" id="upload" method="post" action="process/upload.php" enctype="multipart/form-data">
<table><tr>
<td><label>Upload the file here : </label></td>
<td><input type="file" id="upf" name="upf" ></td></tr><tr>
<td><label>Remember this password for download : </label></td><td><input type="password" name="pass" id="pass"></td></tr><tr>
<tr><td></td><td><input type="submit" id="sub" name="sub" value="Upload now" onclick="validateup();return false;"></td>
</tr></table>
</form>
<br> <= Database refreshes automatically in <label id="count">10</label>&nbsp;seconds => <br>
<div id="database_area">
<?php
//impentation of DOM for Database in xml file
$doc = new domDocument();
$doc->load('db.xml');
if(!$doc){
	echo "Error in parsing the database.Please Contact Admin";
}
else{
	echo "<script language=\"javascript\">database(10);</script>";	
}
//---------------------- Ajax call ends here
/*$filetest = $doc->getElementsByTagName('file');
echo "<table><tr><th>File Name</th><th>File Size</th></tr><tr><td>";
foreach($filetest as $filetestloop){
$names = $filetestloop->getElementsByTagName('name');
echo $names->item(0)->nodeValue;
echo "</td><td>";
$size = $filetestloop->getElementsByTagName('size');
echo $size->item(0)->nodeValue." Kb";
echo "</td></tr><tr><td>";

*/
?>
</div>
</body>
</html>
