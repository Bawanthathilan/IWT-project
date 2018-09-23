<?php include('server.php') ?>
<html>
	<head>
	<title>Birthday.com Register Form </title>
	

	<link rel ="stylesheet" href="css/stylesheet.css">
	<link rel ="stylesheet" href="css/navstyle.css">
	<link rel ="stylesheet" href="css/slider.css">
	<link rel ="stylesheet" href="css/formvalid.css">
	 
	  <script src="css/java.js"></script> 
	 <style>
		body {
			background-image: url("pictures/become.jpg");
			
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




input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}


.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container0 {
    padding: 16px;
}


.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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
		
	
		
		</header>
		
<br><br><br>
<div class=regpic>
	<img src="pictures/becomeamember.png" style="margin-left: 320px; width: 500px;">
	</div>

<form action="member register.php" method="post" style="border:1px solid #ccc">
	<?php include('errors.php'); ?>
	
  <div class="container0">
    <h1 style="color: white;">Sign Up</h1>
    <p style="color: white;">Please fill in this form to create an account.</p>
    <hr>
     <label for="name"><b>Name</b></label>
    <input name="username" type="text" placeholder="Ex-James Anderson" value="<?php echo $username; ?>" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>

    <label for="psw"><b>Password</b></label>
    <input name="password_1" type="Password" placeholder="*****" required>

    <label for="psw"><b>Password</b></label>
    <input name="password_2" type="Password" placeholder="*****" required>

   

    
    
   
    
    

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
    </div>
  </div>
</form>



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
