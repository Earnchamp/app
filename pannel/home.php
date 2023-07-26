<? session_start();?>
<!DOCTYPE html>
<!-- Created By Freshback.in-->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Home</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
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
  left: 25%;
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
               <a href="#" class="feat-btn" style="text-decoration:none">Campaign setting
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                 <li><a href="addcamp.php" style="text-decoration:none">Add campaign</a></li>
                 <li><a href="editcamp.php" style="text-decoration:none">Edit campaign</a></li>
                  <li><a href="livecampaign.php" style="text-decoration:none">Delete campaign</a></li>
               </ul>
            </li>
            <li>
               <a href="#" style="text-decoration:none" class="serv-btn">Ban number
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="bannumber.php" style="text-decoration:none">Add ban number</a></li>
                  <li><a href="bannumber1.php"style="text-decoration:none">Ban number list</a></li>
               </ul>
            </li>
            <li><a href="lead.php" style="text-decoration:none">Lead history</a></li>
            <li><a href="connectpanel.php" style="text-decoration:none">Link your panel</a></li>
             <li><a href="addgateway.php" style="text-decoration:none">Add gateway</a></li>
            <li><a href="botalert.php" style="text-decoration:none">Bot alert</a></li>
            <li><a href="logout.php" style="text-decoration:none">Logout</a></li>
         </ul>
      </nav>
      <div class="bar">CashFlix</div>
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
<? session_start(); $session = $_SESSION['user']; ?><div class="content">
         <div class="header">
            Hi      
         </div>
      </div>
     <div class="new">
         <div class="header">
            <? echo"$session"; ?>
      </div>
      </div> 
      <br><br><div class="content">
      </div><br><br><br><br><br><br></div></div>
  <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<div class="container"><br> </div>
<?php   
error_reporting(0);
session_start();

$session = $_SESSION['user'];

if(!isset($_SESSION['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{ 
     
}
?>
</body></html>