<!-- Created By Freshback.in-->
<?php
error_reporting(0);
session_start();

$session = $_SESSION['user'];

if(!isset($_SESSION['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";
return;
}else{

$id=$_GET['id'];
$offerid=$_GET['offerid'];
 
    unlink(''.$session.'/LCamp/'.$id.'.json');
    unlink(''.$session.'/offer/'.$offerid.'/'.$event.'.json'); 

$files2 = glob(''.$session.'/offer/'.$offerid.'/*');
foreach($files2 as $file2){
if(is_file($file2)) {unlink($file2);}}

rmdir(''.$session.'/offer/'.$offerid.'');
echo"<meta http-equiv='refresh' content='0;url=livecampaign.php?status=success'>";
 }       
?>