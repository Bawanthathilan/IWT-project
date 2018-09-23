<?php
include("loginserv.php");
    ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Birthday.com </title>
	<link rel ="stylesheet" href="css/stylesheet.css">
	<link rel ="stylesheet" href="css/navstyle.css">
	<link rel ="stylesheet" href="css/slider.css">
	
	 
	  <script type="text/javascript">
function validation()
{
var a = document.form.name.value;
if(a=="")
{
alert("Please Enter Your Name");
document.form.name.focus();
return false;
}
if(!isNaN(a))
{
alert("Please Enter Only Characters");
document.form.name.select();
return false;
}
if ((a.length < 5) || (a.length > 15))
{
alert("Your Character must be 5 to 15 Character");
document.form.name.select();
return false;
}
}
</script>
	
	 <style>
		body {
			background-image: url("pictures/memberback.jpg");
			
		}
		.footer{
			position:fixed;
			left:0;
			bottom :0;
			width:100%
			background-color:white;
			color: white;
			text-align:center;
		}
        </style>


	</head>
	<body>
		<header>
		<div class="header">
			<img src ="pictures/logo.jpg" >
		</DIV>
		
		<div class="banner">
			<img src="images/pi2.png" alt="logo" class="logo">
		</div>
		
</div> 
	
	
		
		</header>
		
<br><br><br> 
<div class=mempic>
	<img src="pictures/mem.png" style="margin-left: 410px;">
	</div>
<div class="login-page">
  <div class="form">

    <form class="login-form" method="post" action="">
      <input type="text" placeholder="username" id="user" name="user" required="">
      <input type="password" placeholder="password" id = "pass" name="pass" required="">

      <button type="submit" name="submit1 >login</button>
     
    </form>
  </div>
</div>
<div class="backbtn">
			<center><a href="home.html"><img src="pictures/back.png" height="70px" width="180px;"></center>
		</div>

<br><br><br> 
<div class="footer-main-div">
	<div class="footer-social-icons">
		<ul>
			<p class="follow">FOLLOW US ON</p>
			 
			<li><a href = "https://www.facebook.com/" target="_blank"> <img src = "pictures/fb.png" width = "60px" height="60px"> </a></li>
			<li><a href = "https://twitter.com/?lang=en" target="_blank"> <img src = "pictures/twi.png" width = "60px" height="60px"> </a></li>
			<li><a href = "https://lk.linkedin.com/" target="_blank"> <img src = "pictures/li.png" width = "60px" height="60px"> </a></li>
			<li><a href = "https://www.instagram.com/?hl=en" target="_blank"> <img src = "pictures/insta.png" width = "60px" height="60px"> </a></li>
		</ul>
	</div>

		<div class="footer-menu-one">
			 <ul><img src ="pictures/d.jpg" width=1020px" height=130px"></ul>
		</div>
		 
		
</div>










		
		
			
	</body>
</html>