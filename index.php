<?php
       include_once 'dbconnect.php';
         $error = false;
       
         if(!empty($_POST['submit']))
         {
         	$name=$_POST['name'];
         	$mobile=$_POST['mobile'];
         	$email=$_POST['email'];
        
         	$add=$_POST['address'];
         	$vehicle=$_POST['vehicle'];
         	$colour=$_POST['colour'];
         
         	$model=$_POST['model'];
         	$gender="";
         	$age=$_POST['age'];
         	if($_POST['gender']=="male")
			{
				$gender="male";
			}
			if($_POST['gender']=="femalemale")
			{
				$gender="male";
			}
			if($_POST['gender']=="other")
			{
				$gender="other";
			}

			$proffession="";

			if($_POST['proff']=="student")
			{
				$gender="student";
			}
			if($_POST['proff']=="busi")
			{
				$gender="business";
			}
			if($_POST['proff']=="hwife")
			{
				$gender="house_wife";
			}
			if($_POST['proff']=="others")
			{
				$gender="others";
			}
			if($_POST['proff']=="govt")
			{
				$gender="govt_employ";
			}
          

			$qry="INSERT INTO `user`(`name`, `mobile`, `email`, `address`, `vehicle`, `modal`, `colour`, `proff`, `gender`, `age`)
         	VALUES ('" . $name . "','" . $mobile . "','" . $email . "','" . $add . "','" . $vehicle . "','" . $model . "','" . $colour . "','" . $proffession . "','" . $gender . "','" . $age . "')";
         	$run= mysqli_query($con,$qry);
         	if($run==true) {
         	 echo "<script>alert('Successfully Joined!!!');window.location='index.php'</script>"; 
             
         	
         	$to = "helpingcars@gmail.com"; // this is your Email address
		    $from = $_POST['email']; // this is the sender's Email address
		    $first_name = $_POST['name'];
		    $subject = "Form submission";
		    $subject2 = "Copy of your form submission";
		    $message = $name . " Thank You for Register";
		    $message2 = "May be your help save the someone's life" . $name ;

		    $headers = "From:" . $from;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
		 
            }
            else 
            {
            	echo "Error" . mysqli_error($con);
            }

         }
         
?>





<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>HELPING CARS</title>

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/about.css">
	    <link rel="stylesheet" href="assets/css/contact.css">
	    <link rel="stylesheet" href="assets/css/service.css">
	    <link rel="stylesheet" href="assets/css/one-page-style.css">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
	</head>
<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">

<!-- Home -->
	<section class="header" id="header">
		
		<nav class="navbar navbar-default" id="navigation-bar">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">HELPING CARS</a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#header">home</a></li>
						<li><a href="#about">about us</a></li>	
						<li><a href="#contact">join</a></li>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
		<div class="container">
			<div class="header-table">
				<div class="header-wrapper">
					<h1 class="header-title">
						HELPING CARS
					</h1>
					<p class="header-subtitle">
						somebody's life is immportant than you seat cover
					</p>
					<h1 class="header-subtitle">
					<a href="#contact" class="btn btn-sub">JOIN US</a>
					</h1>
				</div> <!-- /.header-wrapper -->
			</div>
		</div> <!-- /.container -->
	</section> <!-- /#header -->


<!-- About Us -->
	<section class="about" id="about">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				Our Aim
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>	
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<img src="assets/images/about-1.jpg" alt="about" class="about-img">
				</div> <!-- /.col-md-3 -->
				<div class="col-md-3 col-sm-6">
					<img src="assets/images/about-24.png" alt="about" class="about-img">
				</div> <!-- /.col-md-3 -->

				<div class="col-md-6 col-sm-12">
					<p class="about-detail">
					Our Aim is to create a group of helping people who can spread few happiness by helping the one who is in need.
					</p> 
					<p class="about-detail">
					we would be helping people who are in any kind of need like "ill and unable to reach hospital" or have gone through any "accident" or any other help.

					</p>
					<p class="about-detail">
                     This chain would be offering any kind oh help to make people smile. 
                    
					</p>
				</div> <!-- /.col-md-6 -->

			</div> <!-- /.row -->

			<div class="row">
			
				<div class="col-sm-4">
					<h3 class="section-item-title">
						we care
					</h3>
					<p class="section-item-detail">
						We care about people who are in need and work along to help them and make them happy.
					</p>
				</div>
				<div class="col-sm-4">
					<h3 class="section-item-title">
						Our chain
					</h3>
					<p class="section-item-detail">
						Any body can join us who have car and eager to be on field to help the one who who is in need.
					</p>
				</div>
				<div class="col-sm-4">
					<h3 class="section-item-title">
						Help
					</h3>
					<p class="section-item-detail">
						Any help through vehicle or volunteering to make this social plan effective will be welcomed.
					</p>
				</div>	
			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</section> <!-- /.about -->


<!-- Our Team -->
	<section class="team">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				our team
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/kushal.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Kushal Kumawat
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-2.jpg" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Manish
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-3.jpg" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Ajay
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-4.jpg" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Ankit Daniel
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				
				
				
				
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.team -->

	

<!-- Fan Facts -->
	<section class="fun">
		<div class="container section-wrapper">
		<h2 class="section-title black">
				And still counting
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>	
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							10
						</div>
						<div class="number-title">
							coordinators
						</div>
					</div> <!-- /.fun-box -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							15
						</div>
						<div class="number-title">
							volunteers
						</div>
					</div> <!-- /.fun-box -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							50
						</div>
						<div class="number-title">
							helped cases
						</div>
					</div> <!-- /.fun-box -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							15
						</div>
						<div class="number-title">
							cars
						</div>
					</div> 
				</div>  
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.fun -->



<!-- Testimonial -->
	<section class="testimonial">
		<div class="container section-wrapper">
			<div class="section-title">
				Why helping cars?
			</div> <!-- /.section-title -->
			<div class="underline white"></div>
			<div class="owl-carousel testimonial-owl">
				<div class="item">
					<p class="testimonial-detail">
						“Always be willing to lend a helping hand to others.You may be the only person who cares enough to help” 
					</p>
					<div class="test-name">
						<strong>C.Tang</strong>
					</div>
				</div> <!-- /.item -->
				<div class="item">
					<p class="testimonial-detail">
						"Helping one person might not change the world but it could change the world for one person"
					</p>
					<div class="test-name">
						<strong>Abhinav Shrivastava</strong> <br>
						Helping Cars
					</div>
				</div> <!-- /.item -->
				<div class="item">
					<p class="testimonial-detail">
						"You don't need a reason to help people" 
					</p>
					<div class="test-name">
						
						Helping Cars
					</div>
				</div> <!-- /.item -->
			</div> <!-- /.owl-carousel -->
		</div> <!-- /.container -->
	</section> <!-- /.testimonial -->


<!-- Add -->
	<section class="section-wrapper add container">
	<h2 class="section-title black">
				    Donations
				    </h2>
		<div class="owl-carousel add-owl">
				<div class="item">
					<img src="assets/images/add-1.png" alt="add" class="add-item">
				</div> <!-- /.item -->
				
			</div> <!-- /.owl-carousel -->
	</section>


<!-- Contact with us -->
	<section class="contact section-wrapper" id="contact">
		<div class="container">
			<div class="row">
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-location"></i>
	                <h3>Address</h3>
	                <p class="contact">
	                    Adarsh Nagar <br>
	                    Ajmer,Rajasthan
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-telephone"></i>
	                <h3>Phone</h3>
	                <p class="contact">
	                    +91-9680671062 <br>
	                    +91-9414296484
	                </p>
	            </div>
	           <!-- <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-printer"></i>
	                <h3>Fax</h3>
	                <p class="contact">
	                    Office: 2148-287-8300 <br>
	                    Home: 2528-782-8200
	                </p>
	            </div> -->
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-email"></i>
	                <h3>Email Address</h3>
	                <p class="contact">
	                    <a href="mailto:helpingcars@gmail.com">helpingcars@gmail.com</a> <br>
	                    <a href="expertmarketing.in">www.expertmarketing</a>
	                </p>
	            </div>


	        </div> <!-- /.row -->
	        <form method ="post" class="row form">
                <h3>Join Us</h3>
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Name</label>
                    <input name="name" class="form-control" type="text" placeholder="First Name">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Email address">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Contact number</label>
                    <input name="mobile" class="form-control" type="text" placeholder="Your contact number">
                </div> <!-- /.form-group -->
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="sr-only">Address</label>
                        <textarea class="message form-control" name="address" placeholder="Your Address"></textarea>
                    </div> <!-- /.form-group -->

                     <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Age</label>
                    <input name="age" min="18" class="form-control" type="text" placeholder="Your age">
                </div>
                   <div class=" col-sm-4 col-xs-12 form-group">
								  <select class="form-control" name="gender">
								    <option>Select Gender</option>
								    <option value="male">Male</option>
								    <option value="female">FeMale</option>
								    <option value="other">Other</option>
								  </select>
							</div>
							 <div class=" col-sm-4 col-xs-12 form-group">
								  <select class="form-control" name="proff">
								    <option>Current Proffession</option>
								    <option value="student">Student</option>
								    <option value="busi">Business Person</option>
								    <option value="govt">Govt. Employee</option>
								    <option value="hwife">House Wife</option>
								     <option value="others">Other</option>
								  </select>
							</div>
                           <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">vehicle number</label>
                    <input name="vehicle" class="form-control" type="text" placeholder="Your vehicle number">
                </div>

                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">vehicle colour</label>
                    <input name="colour" class="form-control" type="text" placeholder="Your vehicle colour">
                </div>
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Vehicle Model</label>
                    <input name="model" class="form-control" type="text" placeholder="Your modal name">
                </div>


                    <input class="btn btn-sub" type="submit" name="submit" value="Join">
                </div>
            </form> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.contact -->


<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						Copyright &copy; 2017 Expertmarketing
					</div>
				</div>
				<div class="col-sm-4 text-center">
					<div class="social-icon">
						<a href="#">
							<div class="icon fb">
								<i class="ion-social-facebook"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon twitter">
								<i class="ion-social-twitter"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon google">
								<i class="ion-social-googleplus"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon rss">
								<i class="ion-social-rss"></i>
							</div>
						</a>
					</div>		
				</div>
				<div class="col-sm-4 text-right">
					<div class="copy">
						Theme by <a href="http://www.expertmarketing.in">expertmarketing.in</a>. All Rights Reserved
					</div>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer>
	


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<script src="assets/js/script.js"></script>



</body>
</html>