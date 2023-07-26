<!-- Created By Freshback.in-->
<?php
error_reporting(0);
session_start();

$session = $_SESSION['user'];

if(!isset($_SESSION['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
$echo = $_SERVER["HTTP_HOST"];
$host = $echo;
session_start();
session_unset();
session_destroy();

echo"You Have Been Logged out Successfully";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";
}
?>