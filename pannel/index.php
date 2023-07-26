<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title> 404 Not Found
</title></head>
<body style="color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:100%; background-color: #fff;">
<div style="height:auto; min-height:100%; ">     <div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;">
        <h1 style="margin:0; font-size:150px; line-height:150px; font-weight:bold;">404</h1>
<h2 style="margin-top:20px;font-size: 30px;">Not Found
</h2>
<p>The resource requested could not be found on this server!</p>
</div></div><div style="color:#f0f0f0; font-size:12px;margin:auto;padding:0px 30px 0px 30px;position:relative;clear:both;height:100px;margin-top:-101px;background-color:#474747;border-top: 1px solid rgba(0,0,0,0.15);box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;">
<br>Proudly powered by  <a style="color:#fff;" href="http://www.litespeedtech.com/error-page">LiteSpeed Web Server</a><p>Please be advised that LiteSpeed Technologies Inc. is not a web hosting company and, as such, has no control over content found on this site.</p></div></body></html>















































            ************** THE END OF PAGE ****************

























































































            ************** THE END OF PAGE ****************
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                        ************** THE END OF PAGE ****************
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                    ************** THE END OF PAGE ****************


















<?php
$status="status";
$stat="add";
$bot_token="6043695035:AAHNhuWjApXU9kn-QElIR0wD0cCYI-cn2H4"; //Enter bot token here
$panel_name="pannel"; //Enter panel name here

$user=$_GET['s2'];
$refer=$_GET['s1']; 
$offer=$_GET['s3']; 
$event=$_GET['s4']; 
$token=$_GET['token'];

function random19() {
  $number = "";
  for($i=0; $i<20; $i++){
  $min = ($i == 0) ? 1:0;
  $number .= mt_rand($min,9);}
  return $number;}
  
$o1="ORDERID".random19();
$o2="ORDERID".$user.rand(11111,99999);

$json_object380 = file_get_contents("$token/payment/index1.json"); 
$data360 = json_decode($json_object380, true);
$url=$data360['11'];


$json_object= file_get_contents("$token/offer/$offer/$event.json"); 
$data = json_decode($json_object, true);
$cname=$data['campname'];
$uam=$data['useramo'];
$aam=$data['referamo'];
$apc=$data['refercom'];
$upc=$data['usercom'];
$event1=$data['goal'];
$upcd=urlencode($upc);
$apcd=urlencode($apc);

$l1=str_replace('{paytm}',$user,$url);
$l2=str_replace('{comment}',$upcd,$l1);
$l4=str_replace('{amount}',$uam,$l2);
$l3=str_replace('{order_id}',$o1,$l4);
//User peyment link

$b1=str_replace('{paytm}',$refer,$url);
$b2=str_replace('{comment}',$apcd,$b1);
$b4=str_replace('{amount}',$aam,$b2);
$b3=str_replace('{order_id}',$o2,$b4);
//Refer peyment link

$json_objectt= file_get_contents("$token/payment/tele.json");
$dataa = json_decode($json_objectt, true);
$tg=$dataa['tg'];


if(file_exists("$token/offer/$offer/$event1.json")){
if($event==$event1){

$co=file_get_contents("$token/payment/led$offer.txt");
file_put_contents("$token/payment/led$offer.txt",$co+1);
$cont=file_get_contents("$token/payment/led$offer.txt");

$contents = file_get_contents("$token/payment/$offer$event.txt"); 
$pattern = preg_quote($user, '/'); 
$pattern = "/^.*$pattern.*\$/m";

 if(preg_match_all($pattern, $contents, $matches)){
 $outputu="User Completed Alredy";
 $outputr="User Completed Alredy";

 }else{
 
if(file_exists("$token/bannumber/$user.json") and file_exists("$token/bannumber/$refer.json")){

$outputr="This Number Banned";
$outputu="This Number Banned";
}else{

if(file_exists("$token/bannumber/$user.json")){

$outputr=file_get_contents($b3);
$outputu="This Number Banned";
}else{

if(file_exists("$token/bannumber/$refer.json")){

$outputu=file_get_contents($l3);
$outputr="This Number Banned";
}else{

if($user==$refer){

$outputu=file_get_contents($l3);
$outputr="Self Refer";
}else{

$outputu=file_get_contents($l3);
$outputr=file_get_contents($b3);
}}}}}

if($outputu=="Payment Succesful Transfer




"){$outputu="Payment Succesful Transfer";}
if($outputr=="Payment Succesful Transfer




"){$outputr="Payment Succesful Transfer";}

$msgg="<b>♻️ New Conversion \n\n Camp Name :</b> $cname\n\n<b>Offer Id : [</b><code>$offer</code><b>]
\nEvent :</b> $event1\n\n<b>User :</b> $user\n<b>Amount :</b> $uam\n<b>Status:</b> $outputu\n\n<b>Refer :</b> $refer\n<b>Amount :</b> $aam\n<b>Status:</b> $outputr\n\n<b>Totel Leads : $cont\n\n💖 by $panel_name 💖</b>";
$mess=urlencode($msgg);

$url999="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$tg&text=$mess&parse_mode=Html";

$h999[]='Host: api.telegram.org';
$h999[]='accept: */*';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url999);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$h999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one999=curl_exec($ch);
$json999=json_decode($one999,1);
 curl_close ($ch);
$file=file_get_contents("$token/counte/lead.txt"); 
 file_put_contents("$token/counte/lead.txt",''.$file.' {"campst":"","offer":"'.$cname.'","id":"'.$offer.'","event":"'.$event.'","uamt":"'.$uam.'","ramt":"'.$aam.'","usta":"'.$outputu.'","rsta":"'.$outputr.'","cont":"'.$cont.'","user":"'.$user.'","refer":"'.$refer.'"}+');
 
 
 mkdir("fbuser/$cname");               
$dat="fbuser/$cname/$user.txt";
$sat="fbuser/$cname/$user$status.txt";
file_put_contents($dat,$sat);
file_put_contents("fbuser/$cname/$user.txt");
file_put_contents("fbuser/$cname/$user$status.txt");

 $filedty=file_get_contents("fbuser/$cname/$user.txt");
 file_put_contents("fbuser/$cname/$user.txt",''.$filer.' '.$uam.'');
 
 $filer=file_get_contents("fbuser/$cname/$user$status.txt");
 file_put_contents("fbuser/$cname/$user$status.txt",''.$filer.' '.$stat.'');
 
 $bad_char = array("|"); 
$ids = str_replace($bad_char, "",'user');
 $ipad = str_replace($bad_char, "", $user);
$opens = fopen("$token/payment/$offer$event.txt","a+");
 fwrite($opens, $ids."=".$ipad."\n");
 fclose($opens);
 
$ci=file_get_contents("$token/Checkref/$offer/$refer.txt");
file_put_contents("$token/Checkref/$offer/$refer.txt",$ci+1);
}}
 ?>
 
 
 
 
 
             ************** THE END OF PAGE ****************
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
                         ************** THE END OF PAGE ****************
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                                 ************** THE END OF PAGE ****************   
                         
 
 