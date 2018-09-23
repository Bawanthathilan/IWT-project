<!DOCTYPE html>
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
			<img src="images/pi2.PNG" alt="logo" class="logo">
		</div>
		<div class="topnav">
		<a href="home.html">Home</a>
		<a href="kids.html">Kids Birthday</a>
		<a href="adult.html">Adult Birthday</a>
		<a class="active" href="Supplies.html">Party Supplies</a>
		<a href="book2.html">Booking</a>
		<a href="Contact.html">Contact Us</a>
		
</div> 
		
	
		
		</header>
		
<br><br><br>

<form action="/page2_form.php" style="border:1px solid #ccc">
  <div class="container0">
    <h1 style="color: white;">Sign Up</h1>
    <p style="color: white;">Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    
    
    <p>By creating an account you agree to our <a href="" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<div class="backbtn">
			<center><a href="Supplies.html"><img src="pictures/back.png" height="70px" width="180px;"></center>
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