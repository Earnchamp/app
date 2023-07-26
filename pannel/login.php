<?php session_start(); ?>
<DOCTYPE html>
<!-- Created By Freshback.in-->
<html><head><meta name='viewport' content='width=device-width'/>
<title>Login</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'><link rel="stylesheet" href="./login.css"><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>
body {
 background-color: #8e44ad;
 font-family: 'Open Sans', sans-serif;
 display: flex;
 align-items: center;
 justify-content: center;
 min-height: 100vh;
 margin: 0;
}

</style>
<div class="container">
 <div class="header">
<h2>Login</h2>
</div>
<form id="form" class="form" action="" method="POST">
  <div class="form-control">
   <label for="username">Username</label>
   <input type="text" name="user" class="input inp"  placeholder="username" required>
     </div>
     
  <div class="form-control">
   <label for="username">Password</label>
   <input type="password" name="pwd" class="password"  placeholder="password" required>
  </div>

<input type="submit" name="submit" value="Login" required/>

</form>

 <?php
   error_reporting(0);
   
   
     if(!isset($_POST['submit'])){
      
      echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/loginfirst.js"></script>';
     }
    if($_POST['submit']){
        $user=$_POST['user'];
        $pwd=$_POST['pwd'];
        $data="user/$user.txt";
        if(file_exists($data)){}else{
        echo'<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/not.js"></script>';
            return;
        }  
           $pwd1=file_get_contents($data);
           if($pwd==$pwd1){
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/login.js"></script>';
            $_SESSION['user']=$user;
            echo"<meta http-equiv='refresh' content='1;url=home.php'>";    
                        
         }else{
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/wrongpass.js"></script>';            
               exit;
           }

    }
    ?>
       