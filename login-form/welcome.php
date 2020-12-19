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
));



   foreach($users_data as $key=>$value){
    
      if($users_data[$key]['role']=='admin'){
        if ($_POST['username']==$users_data[$key]['username'] && $_POST['password']==$users_data[$key]['password']){
           
            header('Location:http://localhost/login-form/admin.php');


        }};

        if($users_data[$key]['role']=='user'){
            if ($_POST['username']==$users_data[$key]['username'] && $_POST['password']==$users_data[$key]['password']){
               
                header('Location:http://localhost/login-form/user.php');
    
    
            }}};

        echo  "EROOOOOOOORRR";   
          
        
      
  
   





?>