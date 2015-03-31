<?php 

$errormsg="";
$errorsub="";
$errorname="";
$erroremail="";

$finalmsg="";

if(isset($_POST["submitmyform"])){

if(empty($_POST["name"])){
  $errorname="Sorry Name Field Is Required";
}
else{
  $name=$_POST["name"];
}
if(empty($_POST["subject"])){
  $errorsub="Sorry subject Field Is Required";
}
else{
  $subject=$_POST["subject"];
}
if(empty($_POST["message"])){
  $errormsg="Sorry message Field Is Required";
}
else{
  $message=$_POST["message"];
}
if(empty($_POST["email"])){
  $erroremail="Sorry email Field Is Required";

}
else{
  $message=$_POST["message"];
}
if(!empty($_POST["name"] && $_POST["subject"] && $_POST["message"] && $_POST["email"])){
 $finalmsg='<script>alert("Thank You For Sending Us a Email, will get back to you within 48 hours.");</script>';
   $email_to = "rozeshs@gmail.com";
 
    $subject = "portfolio message";
    $headers = 'From: '.$_POST["email"]."\r\n".
 
'Reply-To: '.$_POST["email"]."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $_POST["subject"], $_POST["message"], $headers); 
}

}


?>