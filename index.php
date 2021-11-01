<?php
$conn = mysqli_connect('localhost:3306','root','root','dressroza');
	
	if(isset($_POST['submit_message'])){
	  
  	$fname = $_POST['fullname'];
  	$email = $_POST['email'];
  	$message = $_POST['message'];
  	
  	
  	$sql = "INSERT INTO contacts(fullname,email,message) VALUES('$fname','$email','$message')";
  	
  	if(!empty($fname) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		if(mysqli_query($conn,$sql)) {
      $success = 'Thankyou for messaging us.';
  		}else {
  			echo 'Query Error ' . mysqli_error($conn);
  		}
  	}else {
  		$error = 'Check your input form';
  	}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="style.css"></link>
	<title>Dressroza Barber</title>
</head>
<body>
	<!-- NAV CONTAINER -->
	<div class="nav-bg"></div>
	<nav>
		<a class="logo" href="index.html">Dressroza</a>
		<div class="menu">
			<div class="line line1"></div>
			<div class="line line2"></div>
		</div>
		<ul>
			<li><a class="anc" href="#hero">HOME</a></li>
			<li><a class="anc" href="#features">FEATURES</a></li>
			<li><a class="anc" href="#about">ABOUT</a></li>
			<li><a class="anc" href="#services">SERVICES</a></li>
			<li><a class="anc" href="#contacts">CONTACTS</a></li>
		</ul>
	</nav>
	
	<!-- HERO CONTAINER -->
	<div class="hero-container" id="hero">
		<div class="hero-content">
			<h1>YOU IMAGINE</h1>
			<h1>AND WE CREATE</h1>
		</div>
		<div class="hero-image">
			<img src="assets/asset2.jpeg" alt="">
		</div>
	</div>
	
	<!-- FEATURE CONTAINER -->
	<div class="first-container" id="features">
		<h3>FEATURES</h3>
		<img onclick="showFeature(0,this)" class="image-one" src="assets/Fringe.jpg" alt="Fringe">
		<img onclick="showFeature(1,this)" class="image-two" src="assets/Taper-fade-with-slick-back-1.jpg" alt="Taper">
		<img onclick="showFeature(2,this)" class="image-three" src="assets/Wavy-Slick-back.jpg" alt="Wavy">
		
	</div>
	
	<!-- ABOUT CONTAINER -->
	<div class="about-container" id="about">
		<div class="about-content">
			<div class="first-about">
				<h1>CREATION OF HAIR</h1>
				<h1>IS OUR FUNDAMENTALS</h1>
			</div>
			<div class="second-about">
				<p>"Ut egestas euismod ullamcorper. Ut suscipit lorem a nulla varius, sit amet imperdiet leo vulputate."</p>
				<a href="#contacts">Let's Talk</a>
			</div>
			<div class="third-about">
				<p>"Ut egestas euismod ullamcorper. Ut suscipit lorem a nulla varius, sit amet imperdiet leo vulputate."</p>
			</div>
		</div>
		<div class="about-image">
			<img src="assets/asset1.jpeg" alt="">
		</div>
	</div>
	
	<!-- SERVICE-CONTAINER AND CONTACT CONTAINER -->
	<div class="service-contact">
		<!-- SERVICE -->
		<div class="service-container" id="services">
			<h3>SERVICES</h3>
			<div class="service">
				<div class="head-service">
					<h1>MENS HAIRCUT</h1>
					<span onclick="showService(1,this)" class="service-btn">+</span>
				</div>
				<div class="service-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur convallis augue, nec ultrices sem vulputate at. Curabitur mollis tincidunt dui at eleifend. Vivamus urna mi, condimentum sit amet nulla quis, sagittis egestas augue. Cras arcu urna, convallis vel euismod quis, placerat a purus. Curabitur a tellus erat. In efficitur volutpat mattis. Mauris iaculis vulputate orci ac tincidunt. </p>
				</div>
			</div>
			<div class="service">
				<div class="head-service">
					<h1>SCALP MASSAGE AND CONDITIONING...</h1>
					<span onclick="showService(2,this)" class="service-btn">+</span>
				</div>
				<div class="service-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur convallis augue, nec ultrices sem vulputate at. Curabitur mollis tincidunt dui at eleifend. Vivamus urna mi, condimentum sit amet nulla quis, sagittis egestas augue. Cras arcu urna, convallis vel euismod quis, placerat a purus. Curabitur a tellus erat. In efficitur volutpat mattis. Mauris iaculis vulputate orci ac tincidunt. </p>
				</div>
			</div>
			<div class="service">
				<div class="head-service">
					<h1>BEARD SCULPTION</h1>
					<span onclick="showService(3,this)" class="service-btn">+</span>
				</div>
				<div class="service-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur convallis augue, nec ultrices sem vulputate at. Curabitur mollis tincidunt dui at eleifend. Vivamus urna mi, condimentum sit amet nulla quis, sagittis egestas augue. Cras arcu urna, convallis vel euismod quis, placerat a purus. Curabitur a tellus erat. In efficitur volutpat mattis. Mauris iaculis vulputate orci ac tincidunt. </p>
				</div>
			</div>
			<div class="service">
				<div class="head-service">
					<h1>STRAIGHT HAIR AND WET SHAVE</h1>
					<span onclick="showService(4,this)" class="service-btn">+</span>
				</div>
				<div class="service-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur convallis augue, nec ultrices sem vulputate at. Curabitur mollis tincidunt dui at eleifend. Vivamus urna mi, condimentum sit amet nulla quis, sagittis egestas augue. Cras arcu urna, convallis vel euismod quis, placerat a purus. Curabitur a tellus erat. In efficitur volutpat mattis. Mauris iaculis vulputate orci ac tincidunt. </p>
				</div>
			</div>
		</div>
		<!-- CONTACTS -->
		<div class="contact-container" id="contacts">
			<h3>CONTACTS</h3>
			<div class="head-contact">
      <h1>WE BELIEVE</h1>
      <p>Ut egestas euismod ullamcorper. Ut suscipit lorem a nulla varius, sit amet imperdiet leo vulputateUt egestas euismod ullamcorper. Ut suscipit lorem a nulla varius, sit amet imperdiet leo vulputate</p>
      <ul>
        <li><a href="#">FACEBOOK</a></li>
        <li><a href="#">INSTAGRAM</a></li>
        <li><a href="#">YOUTUBE</a></li>
      </ul>
    </div>
    <div class="form-contacts">
      <form action=" " method="POST" id="contact-area">
      	<input type="text" name="fullname" id="fullname" placeholder="Fullname.." required>
        <input type="email" name="email" id="email" placeholder="Email..." required>
        <textarea name="message" id="message" rows="10" cols="40" placeholder="Message..." required></textarea>
        <button name="submit_message" id="submit">Submit</button>
        <span class="con-mes-success"><?php echo $success ?></span>
        <span class="con-mes-failed"><?php echo $error ?></span>
      </form>
    </div>
  </div>
</div>
	
	<div class="feature-container">
		<span class="close-feature">CLOSE</span>
			<div class="feature-image">
				<img src="" alt="">
			</div>
			<div class="feature-content">
				<div class="feature-text"></div>
			</div>
	</div>
	
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/CSSRulePlugin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
  
	<script src="script.js"></script>
</body>
</html>
