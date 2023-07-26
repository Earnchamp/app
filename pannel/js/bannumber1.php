<? session_start();?>
<!DOCTYPE html>
<!-- Created By Royal camps-->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Unban numbers</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); *{ margin: 0; padding: 0; user-select: none; box-sizing: border-box; font-family: 'Poppins', sans-serif; } .btn{ position: absolute; padding-top:2%; padding-bottom:2%; padding-left: 5%; height: 45px; width: 45px; text-align: center; background: #007BFF; border-radius: 3px; transition: left 0.4s ease; } .btn.click{ left: 260px; } .btn span{ color: white; font-size: 28px; line-height: 45px; } .btn.click span:before{ content: '\f00d'; } .sidebar{ position: fixed; width: 250px; height: 100%; left: -250px; background: #1b1b1b; transition: left 0.4s ease; z-index: 1;} .sidebar.show{ left: 0px; } .sidebar .text{ color: white; font-size: 25px; font-weight: 600; line-height: 65px; text-align: center; background: #1e1e1e; letter-spacing: 1px; } nav ul{ background: #1b1b1b; height: 100%; width: 100%; list-style: none; } nav ul li{ line-height: 60px; border-top: 1px solid rgba(255,255,255,0.1); } nav ul li:last-child{ border-bottom: 1px solid rgba(255,255,255,0.05); } nav ul li a{ position: relative; color: white; text-decoration: none; font-size: 18px; padding-left: 40px; font-weight: 500; display: block; width: 100%; border-left: 3px solid transparent; } nav ul li.active a{ color: cyan; background: #1e1e1e; border-left-color: cyan; } nav ul li a:hover{ background: #1e1e1e; } nav ul ul{ position: static; display: none; } nav ul .feat-show.show{ display: block; } nav ul .serv-show.show1{ display: block; } nav ul ul li{ line-height: 42px; border-top: none; } nav ul ul li a{ font-size: 17px; color: #e6e6e6; padding-left: 80px; } nav ul li.active ul li a{ color: #e6e6e6; background: #1b1b1b; border-left-color: transparent; } nav ul ul li a:hover{ color: cyan!important; background: #1e1e1e!important; } nav ul li a span{ position: absolute; top: 50%; right: 20px; transform: translateY(-50%); font-size: 22px; transition: transform 0.4s; } nav ul li a span.rotate{ transform: translateY(-50%) rotate(-180deg); }
.bar{padding-top:2%; padding-bottom:2%;
text-align: center; background: #007BFF; width:100%; color:#fff; font-size:30px; font-weight: 600; display: block;
}.bar:hover{color:#000;}.box { width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}


.form {
 padding: 30px 40px; 
}
.form-ctr {
 margin-bottom: 10px;
 padding-bottom: 10px;
 position: relative;
}
.form-ctr input {
 border: 2px solid #f0f0f0;
 border-radius: 4px;
 display: block;
 font-family: inherit;
 font-size: 14px;
 padding: 10px;
 width: 100%;
}
input[type=submit]{
background-color: #8e44ad;
 border: 2px solid #8e44ad;
 border-radius: 4px;
 color: #fff;
 display: block;
 font-family: inherit;
 font-size: 16px;
 padding: 10px;
 margin-top: 20px;
 width: 100%;
 }.select{
 border: 2px solid #f0f0f0;
 border-radius: 4px;
 display: block;
 font-family: inherit;
 font-size: 14px;
 padding: 10px;
 width: 100%;
 color:#000;
 background-color: #fff;
}.ab{
text-decoration:none;
color:inherit;
}.delet{
 background-color: #8e44ad;
 border: 0px solid #8e44ad;
 border-radius: 4px;
 color: #fff;
 display: block;
 font-size: 16px;
 padding: 10px;
 width: 100px;
 margin-right:-70%;
 }.ban{
 background-color: red;
 border: 2px solid #000;
 color: #fff;
 }.edit{
 background-color: green;
 border: 2px solid #000;
 color: #fff;
 }.dele{
 background-color: red;
 border: 2px solid #000;
 color: #fff;
 }
 .gform{
 margin-top:10px;
 width:90%;
 border: 0px solid #007BFF;
 position: relative;
 box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
 }.head{
 position: relative;
 padding-top:12px;
 padding-right:160px;
 font-weight: 500;
 }.blue{
 position: relative;
 padding-top:2%;
 padding-right:100%;
 height:0px;
 font-weight: 1000;
 font-size: 32px;
 color:#007BFF;
 }.inp{
 text-align: left;
 padding-left:20px;
 padding-right:20px;
 font-family:regular;
 }
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.btn{
  position: absolute;
  top: 0px;
  left: 0px;
  height: 60px;
  width: 70px;
  text-align: center;
  background: #007BFF;
  border-radius: 3px;
  cursor: pointer;
  transition: left 0.4s ease;
}
.btn.click{
  left: 260px;
}
.btn span{
  color: white;
  font-size: 28px;
  line-height: 45px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  position: fixed;
  width: 250px;
  height: 100%;
  left: -250px;
  background: #1b1b1b;
  transition: left 0.4s ease;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #1e1e1e;
  letter-spacing: 1px;
}
nav ul{
  background: #1b1b1b;
  height: 100%;
  width: 100%;
  list-style: none;
}
nav ul li{
  line-height: 60px;
  border-top: 1px solid rgba(255,255,255,0.1);
}
nav ul li:last-child{
  border-bottom: 1px solid rgba(255,255,255,0.05);
}
nav ul li a{
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding-left: 45px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
}
nav ul li.active a{
  color: cyan;
  background: #1e1e1e;
  border-left-color: cyan;
}
nav ul li a:hover{
  background: #1e1e1e;
}
nav ul ul{
  position: static;
  display: none;
}
nav ul .feat-show.show{
  display: block;
}
nav ul .serv-show.show1{
  display: block;
}
nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 17px;
  color: #e6e6e6;
  padding-left: 80px;
}
nav ul li.active ul li a{
  color: #e6e6e6;
  background: #1b1b1b;
  border-left-color: transparent;
}
nav ul ul li a:hover{
  color: cyan!important;
  background: #1e1e1e!important;
}
nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 22px;
  transition: transform 0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 18%;
  left: 35%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  
}
.content .header{
  font-size: 31px;
  font-weight: 600;
}
.content p{
  font-size: 30px;
  font-weight: 600;
} 
.new{
  position: absolute;
  top: 18%;
  left: 55%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  
}
.new .header{
  font-size: 31px;
  font-weight: 600;
}
 
.bar {
  padding-top:2%;
  padding-bottom:2%;
  text-align: center;
  background: #007BFF;
  width:100%;
  color:#fff;
  font-size:30px;
  font-weight: 600;
  display: block;
}
.bar:hover{
  color:#000;
}

.box {
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) 
}
      </style>
   </head>
   <body>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            DashBoard
         </div>
         <ul>
            <li class="active"><a href="home.php" style="text-decoration:none">Home</a></li>
            <li>
               <a href="#" style="text-decoration:none" class="feat-btn">Campaign setting
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                 <li><a href="addcamp.php" style="text-decoration:none"p>Add campaign</a></li>
                 <li><a href="editcamp.php" style="text-decoration:none">Edit campaign</a></li>
                  <li><a href="livecampaign.php"style="text-decoration:none">Delete campaign</a></li>
               </ul>
            </li>
            <li>
               <a href="#" style="text-decoration:none" class="serv-btn">Ban number
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="bannumber.php"style="text-decoration:none">Add ban number</a></li>
                  <li><a href="bannumber1.php"style="text-decoration:none">Ban number list</a></li>
               </ul>
            </li>
            <li><a href="lead.php"style="text-decoration:none">Lead history</a></li>
            <li><a href="connectpanel.php"style="text-decoration:none">Link your panel</a></li>
             <li><a href="addgateway.php"style="text-decoration:none">Add gateway</a></li>
            <li><a href="botalert.php"style="text-decoration:none">Bot alert</a></li>
            <li><a href="logout.php"style="text-decoration:none">Logout</a></li>
         </ul>
      </nav>
      <div class="bar">Royal camps</div>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
      <?php
    
error_reporting(0);
session_start();
$session = $_SESSION['user'];
if(!isset($_SESSION['user'])){
  
   
echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{

     $status=$_GET['status'];
     if($status=="success"){
       echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="unban.js"></script>';
    echo"<meta http-equiv='refresh' content='2;url=bannumber1.php'>";
     }
 echo'<div class="box"><table class="table table-striped"><thead> <tr style="color:#fff; background-color:#1b1b1b;"><th scope="col">   No</th> <th scope="col">   Banned number</th><th scope="col">Unban</th></tr> </thead>';

$ban1=file_get_contents(''.$session.'/bannumber/1.json');

$ban2=file_get_contents(''.$session.'/bannumber/2.json');

$ban3=file_get_contents(''.$session.'/bannumber/3.json');

$ban4=file_get_contents(''.$session.'/bannumber/4.json');

$ban5=file_get_contents(''.$session.'/bannumber/5.json');

$ban6=file_get_contents(''.$session.'/bannumber/6.json');

$ban7= file_get_contents(''.$session.'/bannumber/7.json');

$ban8=file_get_contents(''.$session.'/bannumber/8.json');

$ban9=file_get_contents(''.$session.'/bannumber/9.json');

$ban10=file_get_contents(''.$session.'/bannumber/10.json');
}
if (file_exists(''.$session.'/bannumber/1.json')){
echo"<tbody><tr><th scope='row'>1</th><td>$ban1</td><td><font color='red' size='3'><button class='edit' name='delete'><a class='a' href='delete1.php?id=1' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/2.json')){
echo"<tbody><tr><th scope='row'>2</th><td>$ban2</td><td><font color='red' size='3'><button class='edit' name='delete'><a class='a' href='delete1.php?id=2' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
if (file_exists(''.$session.'/bannumber/3.json')){
echo"<tbody><tr><th scope='row'>3</th><td>$ban3</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=3' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/4.json')){
echo"<tbody><tr><th scope='row'>4</th><td>$ban4</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=4' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/5.json')){
echo"<tbody><tr><th scope='row'>5</th><td>$ban5</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=5' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/6.json')){
echo"<tbody><tr><th scope='row'>6</th><td>$ban6</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=6' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/7.json')){
echo"<tbody><tr><th scope='row'>7</th><td>$ban7</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=7' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/8.json')){
echo"<tbody><tr><th scope='row'>8</th><td>$ban8</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=8' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/9.json')){
echo"<tbody><tr><th scope='row'>9</th><td>$ban9</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=9' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/10.json')){
echo"<tbody><tr><th scope='row'>10</th><td>$ban10</td><td><button class='edit' name='delete'><a class='a' href='delete1.php?id=10' style='text-decoration:none;
color:inherit;'>Unban</button></td></tr></tbody>";
}
}
if(isset($_POST['submit10'])){
$files2 = glob(''.$session.'/bannumber/*'); 
foreach($files2 as $file2){
  if(is_file($file2)) {
    unlink($file2); 
  }}
file_put_contents(''.$session.'/counte/ban.json',"0");
echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="unban.js"></script>';
    echo"<meta http-equiv='refresh' content='2;url=bannumber1.php'>";
}
 echo"</table></center>
<form action='' method='post'>
<input type='submit' id='submit' name='submit10' value='Unban all'>";
?>