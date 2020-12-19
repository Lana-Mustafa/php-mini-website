
   
<?php
  session_start();
  $name=$_SESSION['name'];
  echo "<h2>welcome  ". $name. "</h2>";
  $_SESSION['user']=rand();
  
?>


