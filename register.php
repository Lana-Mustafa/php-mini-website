<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body {
    background-image: url('https://cdn.pixabay.com/photo/2013/11/28/10/03/autumn-219972_1280.jpg');
    background-repeat: no-repeat;
    background-size: cover;

}
#login {
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	margin-top:200px;
	margin-left:30%;
}
.login {
	font-family: 'Josefin Sans', sans-serif;
	-webkit-transition: .3s;
	-moz-transition: .3s;
	transition: .3s;
	-webkit-transform: rotateY(40deg);
	-moz-transform: rotateY(40deg);
	transform: rotateY(40deg);
}
.login:hover {
	-webkit-transform: rotate(0);
	-moz-transform: rotate(0);
	transform: rotate(0);
}
.login article {
	
}
.login .form-group {
	margin-bottom:17px;
}
.login .form-control,
.login .btn {
	border-radius:0;
}
.login .btn {
	text-transform:uppercase;
	letter-spacing:3px;
}
.input-group-addon {
	border-radius:0;
	color:#fff;
	background:#f3aa0c;
	border:#f3aa0c;
}
.forgot {
	font-size:16px;
}
.forgot a {
	color:#333;
}
.forgot a:hover {
	color:#5cb85c;
}

#inner-wrapper, #contact-us .contact-form, #contact-us .our-address {
    color: #1d1d1d;
    font-size: 19px;
    line-height: 1.7em;
    font-weight: 300;
    padding: 50px;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin-bottom: 100px;
}
.input-group-addon {
    border-radius: 0;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    color: #fff;
    background: #f3aa0c;
    border: #f3aa0c;
        border-right-color: rgb(243, 170, 12);
        border-right-style: none;
        border-right-width: medium;
}




</style>





</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/mini-project/">mini website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/mini-project/">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mini-project/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mini-project/register.php">Register</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login">
							<article>
								<form method="post"action="check.php">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" name="username" class="form-control" placeholder="User Name">
										</div>
                                        <?php if(isset($nameErr)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $nameErr ?></div>
                                           <?php }?>
                                    
                                    </div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input type="text" name="phone"class="form-control" placeholder="Phone Number">
										</div>
                                        <?php if(isset($phoneErr)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $phoneErr ?></div>
                                           <?php }?>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password"name="password" class="form-control" placeholder="Password">
										</div>
                                        <?php if(isset($passwordErr)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $passwordErr ?></div>
                                           <?php }?>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password"name="repeatpassword" class="form-control" placeholder="Confirm Password">
										</div>
                                        <?php if(isset($repeat_passwordErr)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $repeat_passwordErr ?></div>
                                           <?php }?>
                                        <?php if(isset($matchErr)){?>
                                            <div style="color:red;font-size: 15px"><?php echo $matchErr ?></div>
                                           <?php }?>   
									</div>
									  <button type="submit" class="btn btn-warning btn-block">Submit</button>
								</form>
							</article>
						</section></div>
</body>
</html>