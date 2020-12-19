<?php 
session_start();
$key= $_GET ['key']; 
unset($_SESSION["usersdata"][$key]);
header("Location: admin.php"); 





?>