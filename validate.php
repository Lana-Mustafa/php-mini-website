<?php 

session_start();


 $nameErr = $passwordErr ="";
 $user_name =  $password = "";
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if (empty($_POST["user"])) {
    $nameErr = "please enter user name ";
}
  if (empty($_POST["pass"])) {
    $passwordErr = "Please enter password";
  } else {
    $user_name = test_input($_POST["user"]);
    $password = test_input($_POST["pass"]);
    
  
    


  foreach($_SESSION["usersdata"] as $key => $value){
       if ($user_name == $value['username'] && $password == $value['password'] ){
          if( $value["role"] == "admin"){
            $_SESSION['name']=$user_name;
            header("Location:admin.php");  
             
            
          }else{
            $_SESSION['name']=$user_name;
             header("Location:user.php");
              
              
          }
      } else{
        $error ="You are not signed up , please sign up";
        
      }}}



      include('login.php');
?>