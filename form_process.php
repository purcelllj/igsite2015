<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Infogentsia</title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,900italic,700italic,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>

</head>
<body>
	<div class="container-fluid" id="navbar">
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="index.html"><img src="img/Infogentsia_logo.jpg" id="logo-img"class="img-responsive" alt=""></a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="navbar-collapse-1">
						<ul class="nav navbar-nav text-center" id="nav-menu">
						    <li class="active"><a href="about.html">ABOUT<span class="sr-only">(current)</span></a></li>
						    <li><a href="testimonials.html">TESTIMONIALS</a></li>
						    <li><a href="contact-us.html">CONTACT US</a></li>
						    <li><a href="index.html">HOME</a></li>

						</ul>  

						<ul class="nav navbar-nav navbar-right"> 
						    <li id="nav-right"><a href="tel:+1-503-701-8747"><img src="img/phone.png" id="phone-ico" alt="phone">LET'S TALK</a><br><span id="tely"><a href="tel:+1-503-701-8747">+1-503-701-8747</a></span></a></li>
							<li  id="d-top">
							<form class="searchbox nav navbar-right">
								<input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
								<input type="submit" class="searchbox-submit" value="GO">
								<span class="searchbox-icon"><img src="img/search.png" id="search-img" alt="Search Icon"></span>
							</form>
							</li>
							<li id="mobile">
							<form class="navbar-form navbar-center" role="search">
        
        						<div class="form-group">
          						<input type="text" id="searchinp" class="form-control" placeholder="Search">
        						</div><br><br>
        						<button type="submit" id="go-btn" class="btn btn-default">GO</button>
      						</form>
							</li>
						    
						    
						</ul>
						
				    </div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>

	<?php 

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$email_to = "purcelllj@gmail.com"
	$email_subject = "Message from site"

	mail ($email_to, $email_subject, $message, "From " . $name);

	<h3>"Thank you! Please <a href="about.html">Click here</a> to return to the page."</h3>

	?>

	</body>
	</html>

