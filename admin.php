<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


     <table border="2">
    <tr>
       <th>User</th>
       <th>Password</th>
       <th>Role</th>
       <th>Action</th>
     </tr>
    <?php 
    session_start();
    $_SESSION['user']=rand();

      if(isset($_POST['delete1'])){
          $key=$_POST['key'];
          unset($_SESSION['usersdata'][$key]);
      }
      if(isset($_POST['delete2'])){
        $key=$_POST['key'];
        unset($_SESSION['usersdata'][$key]);
    }
      foreach($_SESSION["usersdata"] as $key=>$value){
         echo "<tr>";
         echo"<td>".$value['username']."</td>";
         echo"<td>{$value['password']}</td>";
         echo"<td>{$value['role']}</td>";
         //method1
        /*  echo"<td> <a href='delete.php?key=$key'>Delete</a></td>"; */
        //method2
        echo "<td>
        <form method='post'>
         <input type='hidden' name='key'>
         <input type='submit' name='delete1' value='Delete'>
        </form>
        </td>";
        //method3
        echo "<td>
        <form method='post'>
         <input type='hidden' name='key'value=$key>
         <input type='submit' name='delete2' value='Delete'>
        </form>
        </td>";


         echo "</tr>";

       };
    ?>
     </table>


</body>
</html>





