<?php 
session_start();
$name=$_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>mini-website</title>
     <style>
     .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    
     </style>

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/mini-project/">mini website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        
         <?php if(!isset($_SESSION['user'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mini-project/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mini-project/register.php">Register</a>
        </li>
          <?php }
          else {?>
           <li class="nav-item">
          <h6 class="nav-link" >Welcome <?php echo $name ?></h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mini-project/logout.php">Logout</a>
        </li> 
         <?php }?>
      </ul>
    </div>
  </div>
</nav>
<?php 

$img_array=array('https://cdn.pixabay.com/photo/2014/12/08/02/59/benches-560435_1280.jpg','https://cdn.pixabay.com/photo/2016/11/06/05/36/landscape-1802337_1280.jpg','https://cdn.pixabay.com/photo/2013/07/18/20/26/sea-164989_1280.jpg');
shuffle($img_array);


?>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('<?php echo $img_array[0];?>')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('<?php echo $img_array[1];?>')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('<?php echo $img_array[2];?>')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<?php

if(!isset($_SESSION["usersdata"])){ 
    $_SESSION["usersdata"] = array( 
      array(
      'username'=>"lana",
      'password'=>"123",
      'role'=>"admin"
      
      ),
      array(
          'username'=>"dania",
          'password'=>"456",
          'role'=>"user"
      
      ),            
      array(
          'username'=>"leen",
          'password'=>"789",
          'role'=>"user"
      
      ), 
      array(
          'username'=>"ali",
          'password'=>"321",
          'role'=>"user"
      ),
      array(
          'username'=>"ayad",
          'password'=>"654",
          'role'=>"user"
      )
      );

      
    }  
  
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>
