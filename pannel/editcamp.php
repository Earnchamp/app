<? session_start();?>
<!DOCTYPE html>
<!-- Created By Freshback.in-->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Edit campaign</title>
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
      <div class="bar">Freshback</div>
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
if(!isset($_GET['id'])){


 $live="LCamp";
$offer="offer";
            
 echo'<div class="box"><table class="table table-striped"><thead> <tr style="color:#fff; background-color:#1b1b1b;"> <th scope="col">Offer Id</th> <th scope="col">Camp name</th><th scope="col">Event</th><th scope="col">Edit</th></tr> </thead>';

$json_object = file_get_contents(''.$session.'/'.$live.'/1.json');
$dec=json_decode($json_object,true);
$id1=$dec['id'];
$campname1=$dec['campname'];
$offerid1=$dec['offerid'];
$goal1=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/2.json');
$dec=json_decode($json_object,true);
$id2=$dec['id'];
$offerid2=$dec['offerid'];
$campname2=$dec['campname'];
$goal2=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/3.json');
$dec=json_decode($json_object,true);
$id3=$dec['id'];
$campname3=$dec['campname'];
$offerid3=$dec['offerid'];
$goal3=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/4.json');
$dec=json_decode($json_object,true);
$id4=$dec['id'];
$campname4=$dec['campname'];
$offerid4=$dec['offerid'];
$goal4=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/5.json');
$dec=json_decode($json_object,true);
$id5=$dec['id'];
$campname5=$dec['campname'];
$offerid5=$dec['offerid'];
$goal5=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/6.json');
$dec=json_decode($json_object,true);
$id6=$dec['id'];
$campname6=$dec['campname'];
$offerid6=$dec['offerid'];
$goal6=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/7.json');
$dec=json_decode($json_object,true);
$id7=$dec['id'];
$campname7=$dec['campname'];
$offerid7=$dec['offerid'];
$goal7=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/8.json');
$dec=json_decode($json_object,true);
$id8=$dec['id'];
$campname8=$dec['campname'];
$offerid8=$dec['offerid'];
$goal8=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/9.json');
$dec=json_decode($json_object,true);
$id9=$dec['id'];
$campname9=$dec['campname'];
$offerid9=$dec['offerid'];
$goal9=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/10.json');
$dec=json_decode($json_object,true);
$id10=$dec['id'];
$campname10=$dec['campname'];
$offerid10=$dec['offerid'];
$goal10=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/11.json');
$dec=json_decode($json_object,true);
$id11=$dec['id'];
$campname11=$dec['campname'];
$offerid11=$dec['offerid'];
$goal11=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/12.json');
$dec=json_decode($json_object,true);
$id12=$dec['id'];
$offerid12=$dec['offerid'];
$campname12=$dec['campname'];
$goal12=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/13.json');
$dec=json_decode($json_object,true);
$id13=$dec['id'];
$campname13=$dec['campname'];
$offerid13=$dec['offerid'];
$goal13=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/14.json');
$dec=json_decode($json_object,true);
$id14=$dec['id'];
$campname14=$dec['campname'];
$offerid14=$dec['offerid'];
$goal14=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/15.json');
$dec=json_decode($json_object,true);
$id15=$dec['id'];
$campname15=$dec['campname'];
$offerid15=$dec['offerid'];
$goal15=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/16.json');
$dec=json_decode($json_object,true);
$id16=$dec['id'];
$campname16=$dec['campname'];
$offerid16=$dec['offerid'];
$goal16=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/17.json');
$dec=json_decode($json_object,true);
$id17=$dec['id'];
$campname17=$dec['campname'];
$offerid17=$dec['offerid'];
$goal17=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/18.json');
$dec=json_decode($json_object,true);
$id18=$dec['id'];
$campname18=$dec['campname'];
$offerid18=$dec['offerid'];
$goal18=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/19.json');
$dec=json_decode($json_object,true);
$id19=$dec['id'];
$campname19=$dec['campname'];
$offerid19=$dec['offerid'];
$goal19=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/20.json');
$dec=json_decode($json_object,true);
$id20=$dec['id'];
$campname20=$dec['campname'];
$offerid20=$dec['offerid'];
$goal20=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/21.json');
$dec=json_decode($json_object,true);
$id21=$dec['id'];
$campname21=$dec['campname'];
$offerid21=$dec['offerid'];
$goal21=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/22.json');
$dec=json_decode($json_object,true);
$id22=$dec['id'];
$campname22=$dec['campname'];
$offerid22=$dec['offerid'];
$goal22=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/23.json');
$dec=json_decode($json_object,true);
$id23=$dec['id'];
$campname23=$dec['campname'];
$offerid23=$dec['offerid'];
$goal23=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/24.json');
$dec=json_decode($json_object,true);
$id24=$dec['id'];
$campname24=$dec['campname'];
$offerid24=$dec['offerid'];
$goal24=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/25.json');
$dec=json_decode($json_object,true);
$id25=$dec['id'];
$campname25=$dec['campname'];
$offerid25=$dec['offerid'];
$goal25=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/26.json');
$dec=json_decode($json_object,true);
$id26=$dec['id'];
$campname26=$dec['campname'];
$offerid26=$dec['offerid'];
$goal26=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/27.json');
$dec=json_decode($json_object,true);
$id27=$dec['id'];
$campname27=$dec['campname'];
$offerid27=$dec['offerid'];
$goal27=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/28.json');
$dec=json_decode($json_object,true);
$id28=$dec['id'];
$campname28=$dec['campname'];
$offerid28=$dec['offerid'];
$goal28=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/29.json');
$dec=json_decode($json_object,true);
$id29=$dec['id'];
$campname29=$dec['campname'];
$offerid29=$dec['offerid'];
$goal29=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/30.json');
$dec=json_decode($json_object,true);
$id30=$dec['id'];
$campname30=$dec['campname'];
$offerid30=$dec['offerid'];
$goal30=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/31.json');
$dec=json_decode($json_object,true);
$id31=$dec['id'];
$campname31=$dec['campname'];
$offerid31=$dec['offerid'];
$goal31=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/32.json');
$dec=json_decode($json_object,true);
$id32=$dec['id'];
$campname32=$dec['campname'];
$offerid32=$dec['offerid'];
$goal32=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/33.json');
$dec=json_decode($json_object,true);
$id33=$dec['id'];
$campname33=$dec['campname'];
$offerid33=$dec['offerid'];
$goal33=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/34.json');
$dec=json_decode($json_object,true);
$id34=$dec['id'];
$campname34=$dec['campname'];
$offerid34=$dec['offerid'];
$goal34=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/35.json');
$dec=json_decode($json_object,true);
$id35=$dec['id'];
$campname35=$dec['campname'];
$offerid35=$dec['offerid'];
$goal35=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/36.json');
$dec=json_decode($json_object,true);
$id36=$dec['id'];
$campname36=$dec['campname'];
$offerid36=$dec['offerid'];
$goal36=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/37.json');
$dec=json_decode($json_object,true);
$id37=$dec['id'];
$campname37=$dec['campname'];
$offerid37=$dec['offerid'];
$goal37=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/38.json');
$dec=json_decode($json_object,true);
$id38=$dec['id'];
$campname38=$dec['campname'];
$offerid38=$dec['offerid'];
$goal38=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/39.json');
$dec=json_decode($json_object,true);
$id39=$dec['id'];
$campname39=$dec['campname'];
$offerid39=$dec['offerid'];
$goal39=$dec['goal'];
$json_object = file_get_contents(''.$session.'/'.$live.'/40.json');
$dec=json_decode($json_object,true);
$id40=$dec['id'];
$campname40=$dec['campname'];
$offerid40=$dec['offerid'];
$goal40=$dec['goal']; 
}
if (file_exists(''.$session.'/'.$live.'/1.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid1</th>
<td>$campname1</td>
<td>$goal1</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id1&offerid=$offerid1&goal=$goal1' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/2.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid2</th>
<td>$campname2</td>
<td>$goal2</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id2&offerid=$offerid2&goal=$goal2' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/3.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid3</th>
<td>$campname3</td>
<td>$goal3</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id3&offerid=$offerid3&goal=$goal3' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/4.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid4</th>
<td>$campname4</td>
<td>$goal4</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id4&offerid=$offerid4&goal=$goal4' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/5.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid5</th>
<td>$campname5</td>
<td>$goal5</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id5&offerid=$offerid5&goal=$goal5' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/6.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid6</th>
<td>$campname6</td>
<td>$goal6</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id6&offerid=$offerid6&goal=$goal6' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/7.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid7</th>
<td>$campname7</td>
<td>$goal7</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id7&offerid=$offerid7&goal=$goal7' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/8.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid8</th>
<td>$campname8</td>
<td>$goal8</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id8&offerid=$offerid8&goal=$goal8' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/9.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid9</th>
<td>$campname9</td>
<td>$goal9</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id9&offerid=$offerid9&goal=$goal9' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/9.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid9</th>
<td>$campname9</td>
<td>$goal9</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id9&offerid=$offerid9&goal=$goal9' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/10.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid10</th>
<td>$campname10</td>
<td>$goal10</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id10&offerid=$offerid10&goal=$goal10' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>"; 
}
if (file_exists(''.$session.'/'.$live.'/11.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid11</th>
<td>$campname11</td>
<td>$goal11</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id11&offerid=$offerid11&goal=$goal11' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/12.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid12</th>
<td>$campname12</td>
<td>$goal12</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id12&offerid=$offerid12&goal=$goal12' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/13.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid13</th>
<td>$campname13</td>
<td>$goal13</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id13&offerid=$offerid13&goal=$goal13' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/14.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid14</th>
<td>$campname14</td>
<td>$goal14</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id14&offerid=$offerid14&goal=$goal14' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/15.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid15</th>
<td>$campname15</td>
<td>$goal15</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id15&offerid=$offerid15&goal=$goal15' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/16.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid16</th>
<td>$campname16</td>
<td>$goal16</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id16&offerid=$offerid16&goal=$goal16' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/17.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid17</th>
<td>$campname17</td>
<td>$goal17</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id17&offerid=$offerid17&goal=$goal17' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/18.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid18</th>
<td>$campname18</td>
<td>$goal18</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id18&offerid=$offerid18&goal=$goal18' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/19.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid19</th>
<td>$campname19</td>
<td>$goal19</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id19&offerid=$offerid19&goal=$goal19' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/20.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid20</th>
<td>$campname20</td>
<td>$goal20</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id20&offerid=$offerid20&goal=$goal20' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/21.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid21</th>
<td>$campname21</td>
<td>$goal21</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id21&offerid=$offerid21&goal=$goal21' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/22.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid21</th>
<td>$campname21</td>
<td>$goal21</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id21&offerid=$offerid21&goal=$goal21' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/23.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid23</th>
<td>$campname23</td>
<td>$goal23</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id23&offerid=$offerid23&goal=$goal23' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/24.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid24</th>
<td>$campname24</td>
<td>$goal24</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id24&offerid=$offerid24&goal=$goal24' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/25.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid25</th>
<td>$campname25</td>
<td>$goal25</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id25&offerid=$offerid25&goal=$goal25' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/26.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid26</th>
<td>$campname26</td>
<td>$goal26</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id26&offerid=$offerid26&goal=$goal26' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/27.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid27</th>
<td>$campname27</td>
<td>$goal27</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id27&offerid=$offerid27&goal=$goal27' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/28.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid28</th>
<td>$campname28</td>
<td>$goal28</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id28&offerid=$offerid28&goal=$goal28' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/29.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid29</th>
<td>$campname29</td>
<td>$goal29</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id29&offerid=$offerid29&goal=$goal29' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/30.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid30</th>
<td>$campname30</td>
<td>$goal30</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id30&offerid=$offerid30&goal=$goal30' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/31.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid31</th>
<td>$campname31</td>
<td>$goal31</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id31&offerid=$offerid31&goal=$goal31' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/32.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid32</th>
<td>$campname32</td>
<td>$goal32</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id32&offerid=$offerid32&goal=$goal32' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/33.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid33</th>
<td>$campname33</td>
<td>$goal33</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id33&offerid=$offerid33&goal=$goal33' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/34.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid34</th>
<td>$campname34</td>
<td>$goal34</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id34&offerid=$offerid34&goal=$goal34' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/35.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid35</th>
<td>$campname35</td>
<td>$goal30</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id35&offerid=$offerid35&goal=$goal35' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/36.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid36</th>
<td>$campname36</td>
<td>$goal36</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id36&offerid=$offerid30&goal=$goal36' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/37.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid37</th>
<td>$campname37</td>
<td>$goal37</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id37&offerid=$offerid37&goal=$goal37' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/38.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid38</th>
<td>$campname38</td>
<td>$goal38</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id38&offerid=$offerid38&goal=$goal38' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/39.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid39</th>
<td>$campname39</td>
<td>$goal39</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id39&offerid=$offerid39&goal=$goal39' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/40.json'))
{
echo"<tbody><tr>
<th scope='row'>$offerid40</th>
<td>$campname40</td>
<td>$goal40</td>
<td><button class='edit'><a class='a' href='editcamp.php?id=$id40&offerid=$offerid40&goal=$goal40' style='text-decoration:none;
color:inherit;'>Edit</button></font></td></tr></tbody>";
}


}
if(isset($_GET['id'])){
$id=$_GET['id'];
$offer=$_GET['offerid'];
$goal=$_GET['goal'];
$json_object = file_get_contents(''.$session.'/offer/'.$offer.'/'.$goal.'.json');
$dec=json_decode($json_object,true);
$id2=$dec['id'];
$campname2=$dec['campname'];
$useramo=$dec['useramo'];
$referamo=$dec['referamo'];
$usercom=$dec['usercom'];
$refercom=$dec['refercom'];
$goal=$dec['goal'];

echo'<center><div class="gform"><div class="blue">|</div>
<div class="head">
Edit campaign </div>
<hr>
<form class="form" action="" method="POST">
  <div class="form-ctr">
   <input type="text" placeholder="Campaign Name" name="campname" value="'.$campname2.'" required/>
     </div>
     <div class="form-ctr">
   <input type="text" placeholder="Offer Id" name="offerid" value="'.$offer.'" readonly required/>
  </div>
  <div class="form-ctr">
   <input type="number" placeholder="Campaign User Amount" name="USERAMO" value="'.$useramo.'" required/>
  </div>
  <div class="form-ctr">
   <input type="number" placeholder="Campaign Refer Amount" name="REFERAMO" value="'.$referamo.'" required/>
  </div>
 <div class="form-ctr">
   <input type="text" placeholder="User Payment Comment" name="USERCOM" input minlength="1" input maxlength="100" value="'.$usercom.'" required/>
  </div>
 <div class="form-ctr">
   <input type="text" placeholder="Refer Payment Comment" name="REFERCOM" input minlength="1" input maxlength="100" value="'.$refercom.'" required/>
  </div>
   <div class="form-ctr">
   <input type="text" placeholder="Enter Event/Goal Name" name="goal"  value="'.$goal.'" required/>
  </div>
   <input type="hidden" name="id" value="'.$id.'">
<input type="submit" name="submit" value="Edit campaign" required/>
</form></div>';
}
if(isset($_POST['submit'])){
$campname=$_POST['campname'];
$offerid=$_POST['offerid'];
$goal=$_POST['goal'];
$USERAMO=$_POST['USERAMO'];
$REFERAMO=$_POST['REFERAMO'];
$USERCOM=$_POST['USERCOM'];
$REFERCOM=$_POST['REFERCOM'];
$id=$_POST['id'];
$json='{"key":"'.$session.'","campname":"'.$campname.'","offerid":"'.$offerid.'","useramo":"'.$USERAMO.'","referamo":"'.$REFERAMO.'","usercom":"'.$USERCOM.'","refercom":"'.$REFERCOM.'","goal":"'.$goal.'"}';
file_put_contents(''.$session.'/offer/'.$offerid.'/'.$goal.'.json', $json);

$json4='{"id":"'.$id.'","campname":"'.$campname.'","offerid":"'.$offerid.'","goal":"'.$goal.'"}'; 
file_put_contents(''.$session.'/LCamp/'.$id.'.json',$json4);
echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/edit.js"></script>';
  echo"<meta http-equiv='refresh' content='2;url=editcamp.php'>";
}
?>
</body></html>