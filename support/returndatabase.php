<?php
$bool=1;
$doc = new domDocument();
$doc->load('../db.xml');
$filetest = $doc->getElementsByTagName('file');
echo "<table><tr style=\"background-color:red\"><th>File Name</th><th>File Size</th><th>Download File</th></tr><tr style=\"background-color:white\"><td>";
foreach($filetest as $filetestloop){
if($bool){
	$names = $filetestloop->getElementsByTagName('name');
	echo $names->item(0)->nodeValue;
	echo "</td><td>";
	$size = $filetestloop->getElementsByTagName('size');
	echo $size->item(0)->nodeValue." Kb";
	echo "</td><td><a href=\"process/download.php?name=".$names->item(0)->nodeValue."\">Dwd</a></td></tr><tr style=\"background-color:yellow\"><td>";
	$bool=0;
	}
else
	{
	$names = $filetestloop->getElementsByTagName('name');
	echo $names->item(0)->nodeValue;
	echo "</td><td>";
	$size = $filetestloop->getElementsByTagName('size');
	echo $size->item(0)->nodeValue." Kb";
	echo "</td><td> <a href=\"process/download.php?name=".$names->item(0)->nodeValue."\">Dwd</a></td></tr><tr style=\"background-color:white\"><td>";
	$bool=1;
	}
}
echo "----End of the Table----</td></tr></table>";
?>
