<?php 
session_start();
$nameErr = $phoneErr = $passwordErr = $repeat_passwordErr=$matchErr="";
$user_name = $phone =  $password = $repeat_password = "";


    
if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $user_name = test_input($_POST["username"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Please enter password";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["repeatpassword"])) {
    $repeat_passwordErr = "Please re-enter password";
  } else {
    $repeat_password = test_input($_POST["repeatpassword"]);
  }
  if(($password !=$repeat_password)&&($password!="")&&($repeat_password!="")){
    $matchErr="passwords aren't match";
  }
  else{
  
  $new = array('username'=>$user_name ,
  'password'=>$password,
  'role'=>"user"
  ); 
 if(!empty($user_name)&&!empty($password)){

 array_push ( $_SESSION["usersdata"], $new); 
 }} 



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if(empty($nameErr ) && empty($phoneErr) && empty($passwordErr)  && empty($repeat_passwordErr)&&($password ==$repeat_password) )
    { header("Location: login.php");}
else{include('register.php');}



?>