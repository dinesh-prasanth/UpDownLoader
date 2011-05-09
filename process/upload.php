<head><title>Upload Status</title></head>
<link rel="shortcut icon" href="../images/favicon.ico" >
<body><?php 

if($_FILES['upf']){
if($_FILES['upf']['size']>50000){
echo "Error :: File size is larger than 50kb to be uploaded.<br> Reason :: Storage space of account is only 512MB and to control spams.<br>Upload limit can be extended by adminstrator when needed. Report Administrator<br><strong>DP</strong>";
}
else{
$target = "../files/";
$filename = $_FILES['upf']['name'];
$target = $target.basename($filename);
if(move_uploaded_file($_FILES['upf']['tmp_name'],$target)){
$doc = new domDocument('1.0');
$doc->load('../db.xml');
if(!$doc){
echo "Error in parsing the database.Please Contact Admin";
}
else{

$files = $doc->getElementsByTagName("files");
foreach($files as $filesloop){
$file = $filesloop->appendChild($doc->createElement('file'));
$name = $file->appendChild($doc->createElement('name'));
$name->appendChild($doc->createTextNode($filename));
$name = $file->appendChild($doc->createElement('password'));
$name->appendChild($doc->createTextNode($_POST['pass']));
$name = $file->appendChild($doc->createElement('size'));
$name->appendChild($doc->createTextNode($_FILES['upf']['size']/1000));
$doc->formatOutput = true;
$testdb = $doc->saveXML();
$doc->save('../db.xml');
}
echo "<br>";


echo "The file is successfully transferred.<br>";
echo "<br>FILE DETAILS :: [ File name : <strong>".$filename."</strong> ]   [ File size : <strong>".($_FILES['upf']['size']/1000)."</strong> Kb ]";
}
}}
}
else{
echo "<p style=\"background-color:red;width:380px;padding:20px;\" >UnAuthorized Login or File transfer Error. Report Administrator<br><strong>DP</strong></p>";
}


?>
<br><br><br>
<a href="../">Click here for Home page</a>
</body>
