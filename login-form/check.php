<?php   
   $username = $_POST['username'];
   $password = $_POST['password'];
   
$users_data=array( 
'user1'=>array(
'username'=>"Lana",
'password'=>"Lana",
'role'=>"admin"

),
'user2'=>array(
    'username'=>"Dania",
    'password'=>"Dania",
    'role'=>"user"

),            
'user3'=>array(
    'username'=>"Leen",
    'password'=>"Leen",
    'role'=>"user"

), 
'user4'=>array(
    'username'=>"Ali",
    'password'=>"Ali",
    'role'=>"user"
),
'user5'=>array(
    'username'=>"Ayad",
    'password'=>"Ayad",
    'role'=>"user"
)
);
$names=array();
$passwords=array();
$role=array();

   foreach($users_data as $key=>$value){
     $names[]=$value['username'];
     $passwords[]=$value['password'];
     $role[]=$value['role'];
   }
   $key_user= array_search($username, $names); 
   $key_pass= array_search($password, $passwords);
     
    
if(in_array($username,$names)&&in_array($password,$passwords)&&($key_user==$key_pass)){
      if($role[$key_user]=="admin") {
         /* header('REFRESH:1;URL=admin.php'); */
         header('Location:http://localhost/login-form/admin.php');
      } else{
        /*  header('REFRESH:1;URL=user.php'); */
        header('Location:http://localhost/login-form/user.php');
      }
    
   }
   else{
       echo"You don't have permission to acess this page ";
   }
  
   





?>