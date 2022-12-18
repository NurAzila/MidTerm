<?php include('mysql.php') ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <link rel="shortcut icon" type="img/png" href="image/login.png">
    <link rel="stylesheet"type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <style>
.footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

.footer-distributed .footer-left{
	width: 40%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;
	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
	margin-right: 3px;
	margin-bottom: 5px;
}

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
    </style>

    </head>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <body>
    <div class="row" style="padding-top:50px">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div id="home-section">
            <form method="post" class="form" name="login" action="login.php">
        <?php include('errors.php'); ?>
        <h1 class="login-title">Login</h1>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" class="login-input"/>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" class="login-input"/>
        </div>
        <div class="input-group" align="center">
            <input type="submit" class="login-button" value="Login" name="login_user"/>
        </div>

        <p>
            Not yet a member? <a href="register.php">New Registration</a></p>
  </form>
      </div>
    </div>
  <div id="hr" style="padding-top:50px">
  <hr>
  </div>
</div>

<!--FOOTER SECTION -->
	 
<footer class="footer-distributed">

<div class="footer-left">

    <img src="image/logo.png" alt="" height="150px" width="200px">

    <p class="footer-links">
        <a href="index.php">HOME</a>
        ·
        <a href="login.php">REPORT</a>
        ·
        <a href="about.php">ABOUT</a>
        ·
        <a href="register.php">REGISTER</a>
        ·
        <a href="login.php">LOG IN</a>
    </p>

</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span></span> Malaysia </p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+60 12-3456789</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="malaysia:support@prihatin.com">malaysia@prihatin.com</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>Disaster Management System</span>
        This is the Latest Disaster Management System Hosts by Malaysia Prihatin Foundation

    </p>

</div>

</footer>

<!-- END FOOTER SECTION -->

  </body>

</html>