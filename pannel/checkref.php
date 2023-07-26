<!-- Created By Freshback.in-->
<?php
$name=$_GET['u'];
$num=$_GET['n'];
$camp=$_GET['o'];

if(file_exists("$name/Checkref/$camp/$num.txt")){

$file=file_get_contents("$name/Checkref/$camp/$num.txt");

echo"$file";

}else{
echo"0";
}
?>