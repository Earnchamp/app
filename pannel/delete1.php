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
$ban=$_GET['id'];

    unlink("$session/bannumber/$ban.json"); // delete file
echo"<meta http-equiv='refresh' content='0;url=bannumber1.php?status=success'>";
 }       
?>