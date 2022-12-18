<?php include('mysql.php')?>

<!DOCTYPE html>

<html>
    <head>
        <title>Reporting Form</title>
        <link rel="icon" href="image/report.png" type="image/gif"> <link rel="stylesheet" href="Style.css"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="style.css" rel="stylesheet" />
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

<body>

<!-- NAV SECTION -->
<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
    <table height="100" align="center">
      <tr>
      <td><img src="image/logo.png" height="150px" width="200px" align="center"></td>
        <td align="center" width="240" height="100">
        <a href="index.php" title="HOME">
            <button
              class="button"
              style="
                background-color: black;
                color: white;
              "
            >
              <b><big><big><big>HOME</big></big></big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
        <a href="report.php" title="REPORT">
            <button
              class="button"
              style="
                background-color: black;
                color: white;
              "
            >
              <b><big><big><big>REPORT</big></big></big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
        <a href="about.php" title="ABOUT">
            <button
              class="button"
              style="
                background-color: black;
                color: white;
              "
            >
              <b><big><big><big>ABOUT</big></big></big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
        <a href="register.php" title="REGISTER">
            <button
              class="button"
              style="
                background-color: black;
                color: white;
              "
            >
              <b><big><big><big>REGISTER</big></big></big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
        <a href="login.php" title="LOG IN">
            <button
              class="button"
              style="
                background-color: black;
                color: white;
              "
            >
              <b><big><big><big>LOG IN</big></big></big></b>
            </button>
          </a>
        </td>
      </tr>
    </table>
                </ul>
            </div>
        </div>
    </div>
</br></br></br></br>
     <!--END NAV SECTION -->

    <form method="post" class="form" action="report.php">
        <?php include('errors.php'); ?>
        <h1 class="login-title">Report</h1>
        <div class="input-group">
            <label> Reporter </label>
            <input type="text" name="reporter" class = "login-input" value="<?php echo $reporter; ?>">
        </div>
        <div class="input-group">
            <label> Headline </label>
            <input type="text" name="headline" class = "login-input" value="<?php echo $headline; ?>">
        </div>
        <div class="input-group">
            <label> Description </label>
            <input type="text" name="description" class = "login-input">
        </div>
</br>
        <div class="input-group" align="center">
            <input type="submit" value="Submit" name="insert_report">
        </div>
    </form>

<!--FOOTER SECTION -->
	 
<footer class="footer-distributed">

<div class="footer-left">

    <img src="image/logo.png" alt="" height="150px" width="200px">

    <p class="footer-links">
        <a href="index.php">HOME</a>
        ·
        <a href="report.php">REPORT</a>
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