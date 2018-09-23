<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: memberlog.html');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: memberlog.html");
  }
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Birthday.com </title>
	<link rel ="stylesheet" href="css/stylesheet.css">
	<link rel ="stylesheet" href="css/navstyle.css">
	<link rel ="stylesheet" href="css/slider.css">
	
	 
	  <script src="js/slider.js"></script> 
	 <style>
		body {
			background-image: url("pictures/congruent_outline.png");
			
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
		.signbtn{
			width: 10px;
			height: 2px;
			margin-top:70px;
		}
		.loginbtn{
			width: 10px;
			height: 5px;
			margin-left: 900px;

		}
		.usericon{
			width: 10px;
			height: 5px;
			margin-left: 770px;
			margin-bottom: :-30px;
		}
		.addhpic{
			width: 10px;
			height: 5px;
			margin-left: 865px;
			
			position: absolute;
		}
</style>

	</head>
	<body>
		<header>

			<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color: white; ">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

		<div class="header">
			<img src ="pictures/logo.jpg" >
		</DIV>
		
		<div class="banner">
			<img src="images/pi2.PNG" alt="logo" class="logo">
		</div>
		<div class="topnav">
		<a class="active" href="home.html">Home</a>
		<a href="kids.html">Kids Birthday</a>
		<a href="adult.html">Adult Birthday</a>
		<a href="Supplies.html">Party Supplies</a>
		<a href="book2.html">Booking</a>
		<a href="contact.html">Contact Us</a>

		
</div> 
<div class="searchpic">
<img src="pictures/search.png" style="width: 150px; margin-top: 15px;margin-left: -45px;"></div>
</div>
<div class="addhpic">
<img src="pictures/add.png" style="width: 50px; margin-top:70px;margin-left: -45px;"></div>
</div>
<div class="usericon">
<img src="pictures/user.png" style="width: 50px; margin-top: 15px;margin-left: 50px;"></div>
</div>

<div class="signbtn">
<a href="member register.php"><img src="pictures/signup.png" style="width: 200px;"></a>
</div>
<div class="loginbtn">
<a href="memberlog.html"><img src="pictures/memberlog.png" style="width: 200px;"></a>
</div>
<br>
<form>
  <input type="text" name="search " placeholder="Search..">
</form>
<br><br><hr>
	
	<div class ="intro">

	<p>Birthday is a special event which comes once a year. We all like to celebrate it in special way. We are here to help you to organize your birthday party. Birthday.com is a technology based online birthday party solution provider.</p>
	</div>
	<hr>
		
		</header>
		<div class="slideshow-container">

		<div class="mySlides fade">
		
		<img src="pictures/1.jpg" style="width:100%">
		
		</div>

		<div class="mySlides fade">
		
		<img src="pictures/2.jpg" style="width:100%">
		
		</div>

		<div class="mySlides fade">
		
		<img src="pictures/3.jpg" style="width:100%">
		
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<h2 style="color: white;text-align: center;font-size: 30px;">MEET THE TEAM</h2>
<div class="row4">
  <div class="column1">
    <div class="card2">
      <img src="pictures/ceo.jpg" alt="Jane" style="width:100%">
      <div class="container1">
        <h2 style="color: white;">Jane Doe</h2>
        <p class="title" style="color: white;">CEO & Founder</p>
        <p style="color: white;">Our Misson</p>
        <p style="color: yellow;">A small body of determined spirits fired by an unquenchable faith in their mission can alter the course of history.</p>
        <p>john@birthday.com</p>
        
      </div>
    </div>
  </div>

  <div class="column1">
    <div class="card2">
      <img src="pictures/art.jpg" alt="Mike" style="width:100%">
      <div class="container1">
        <h2 style="color: white">Mike Ross</h2>
        <p class="title" style="color: white;">Art Director</p>
        <p style="color: white;">Our Vision</p>
        <p style="color: yellow">Live the Life of Your Dreams: Be brave enough to live the life of your dreams according to your vision and purpose instead of the expectations and opinions of others.</p>
        <p>art@birthday.com</p>
        
      </div>
    </div>
  </div>
  <div class="column1">
    <div class="card2">
      <img src="pictures/designer.jpg" alt="John" style="width:100%">
      <div class="container1">
        <h2 style="color: white;">Andy Jonson</h2>
        <p class="title" style="color: white;">Designer</p>
        <p style="color: yellow;">You can have an art experience in front of a Rembrandt… or in front of a piece of graphic design.</p>
        <p>designer@birthday.com</p>
       
      </div>
    </div>
  </div>
</div>
<hr>

</center><div class="off">
	 <center>
	 <img src ="pictures/package.jpg" width="300px" height="188px" class="package">
	 <img src ="pictures/off.jpg" width="300px" height="188px" class="package">
	 <img src ="pictures/adult.jpg" width="300px" height="188px" class="package"></center>
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