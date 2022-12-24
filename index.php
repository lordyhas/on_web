<?php
//@author : lordyhas; 
//use-tamplate: true;
//version : 0.1.0+1
//

 


///++++++++++++++++++++++++++++++++++++++


$exp_year = 4;

/// --- --- SECTION LIFE STASTISTICS PANEL (bg-images) --- ---
				
$bg_coversx = array(
	"cover-bg-3.jpeg",
	"cover-keyboard.jpeg",//"cover-bg-1",
	"cover-bg-2.jpg",
	"cover-bg-4.jpeg",
	"cover-keyboard.jpeg",
	"cover-bg-3.jpeg",
	"cover-keyboard.jpeg",
	"cover-bg-2.jpeg",
	"cover-keyboard.jpeg",
);
$i = date('w'); /// index of background images
				
				
/// --- --- SECTION LIFE STASTISTICS PANEL (stat) --- ---
				
$year = date("Y");
$coc = 135; 
if($year > 2023 ){
	$coc = 365 + $coc;
}else{
	$coc = $coc + date("z");
}
				
$projects = 5;
$clients = 19;
$parteners = 2; 
				
/// --- --- SECTION MY SKILLS --- ---				
$skills = array(
	1 => ["Python", 90, 1],
	["Java/Kotlin", 80, 2],
	["HTML5/CSS", 90, 3],
	["Flutter/Dart", 90, 4],
	["C/C++", 90, 5],
	["JavaScript", 40, 6],
	//["Arduino", 70, 7],
	["SQL", 60, 4],
	["PHP", 70, 5]
	//"" => ,
	//"" => ,
); 
?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hassan Kajila | Home </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Portofolio of Hassan Kajila" />
	<meta name="keywords" content="lordyhas" />
	<meta name="author" content="Hassan Kajila" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">

	<link href="css/modal.style.css" rel="stylesheet" type="text/css" />

	
	
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

	<body style="background-color: #dadaef;" > <!-- style="background-color: #dadaef;" -->

	<div id="myModal" class="xmodal" style=" z-index: 15000;">
            <!-- Modal content -->
            <div class="xmodal-content">
                
                <span class="close text-danger ml-1">&times; <i class=""></i></span>
                <div class="card">
                    
                    <div class="card-body">
                        <h3 class="card-title text-info">My Contacts</h3>
                        <p class="card-text text-info">
                            I'm Sofware Developer : Web and Mobile app

							<div class="col">
								<div class="colorlib-feature colorlib-feature-sm">
									<div class="colorlib-icon">
										<i class="icon-mail"></i>
									</div>
									<div class="colorlib-text">
										<p>
											<a href="email://contact@hassankajila.com" style="text-decoration: none;"> contact@hassankajila.com</a> <br/>
											<a href="email://dev.haspro@gmail.com" style="text-decoration: none;"> dev.haspro@gmail.com</a>
										</p>
									</div>
								</div>

								<div class="colorlib-feature colorlib-feature-sm ">
									<div class="colorlib-icon">
										<i class="icon-globe-outline"></i>
									</div>
									<div class="colorlib-text">
										<!--p>Democratic Republic of Congo.</p-->
										<p> 
											<a href="https://twitter.com/lordyhas" target="_blank"> <i class="text-secondary icon-twitter2"></i> lordyhas</a> <br/>
											<a href="https://instagram.com/lordyhas" target="_blank"> <i class="text-secondary icon-instagram"></i> lordyhas</a> <br/>
										</p>
									</div>
								</div>

								<div class="colorlib-feature colorlib-feature-sm">
									<div class="colorlib-icon">
										<i class="icon-phone"></i>
									</div>
									<div class="colorlib-text">
										<p><a href="#" style="text-decoration: none;">Unknown</a></p>
									</div>
								</div>
							</div>
                        </p>
                 
                        <div class="btn btn-success">another time </div>
						<a href="/download/Hassan_Kajila_CV-(Eng).pdf" downoload="HASSAN_KAJILA_CV" class="btn btn-primary btn-learn" >
							Download CV <i class="icon-download4"></i> 
						</a>
                        
                    </div>
                </div> <!-- .card --> 
            </div>

    </div>

	<div id="colorlib-page">
		<div class="container-wrap">
		<!--a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a-->
		<!-- SECTION NAV & MENU -->
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/img-lordyhas-1.jpg);"></div>
				<h1 id="colorlib-logo"><a href="/home" style="text-decoration: none;">Hassan Kajila<br/> <i>@lordyhas</i> </a></h1>
				<span class="position"><a href="#">Software-Developper</a>/KDynamic Lab</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="/home" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<!--li><a href="#" data-nav-section="education">Education</a></li-->
						<!--li><a href="#" data-nav-section="experience">Experience</a></li-->
						<li><a href="#" data-nav-section="work">Work</a></li>
						<!--li><a href="#" data-nav-section="blog">Blog</a></li-->
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p>
					<small>Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> Hassan Kajila. All rights reserved. 
					 	<i class="icon-heart" aria-hidden="true"></i>
					 
					</small>
				</p>
				<ul class="text-secondary">
					<li><a href="https://github.com/lordyhas"><i class="text-secondary icon-github"></i></a></li>
					<li><a href="https://twitter.com/lordyhas"><i class="text-secondary icon-twitter2"></i></a></li>
					<!--li><a href="#"><i class="text-secondary icon-linkedin2"></i></a></li-->
					<li><a href="https://instagram.com/lordyhas"><i class="text-secondary icon-instagram"></i></a></li>
				</ul>
			</div>

		</aside>

		<!--  
            <button onclick="openWin()">Open "myWindow"</button>
            <button onclick="closeWin()">Close "myWindow"</button>
        -->
            
        <script>
            let myWindow;
            
            function openWin(str) {
              myWindow = window.open(str, "", "width=1080,height=920");
            }
            
            function closeWin() {
              myWindow.close();
            }
        </script>

		<div id="colorlib-main">

			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">

				   	<li style="background-image: url(images/img_bg_5.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">

				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
											
						   					<h1 style="color: #fff;">Hi! <br>I'm Hassan K.</h1>
											<h2>@lordyhas <i class="icon-twitter2"></i> </h2>
						   					<!--h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2-->
												<p ><button onclick="openWin('/about')" style="border: 1px solid #fff; color: #fff;" class="btn btn-learn ">View My profile<i class="icon-briefcase3"></i></button></p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img-new-2.jpeg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
									   <div class="desc">
						   					<h1 style="color: #fff;">I am a <br>Software Developer</h1>
												<h2>@lordyhas <i class="icon-github"></i></h2>
												<p>
													<a href="/download/Hassan_Kajila_CV -(Eng).pdf" downoload="HASSAN_KAJILA_CV" style="border: 1px solid #fff; color: #fff;" class="btn btn-primary btn-learn" >
														Download CV <i class="icon-download4"></i> 
													</a>
												</p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<!-- SECTION ABOUT ME -->

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
											<span class="heading-meta">About Us</span>
											<h2 class="colorlib-heading">Who Am I?</h2>
											<p><strong>Hi, I'm Lordy Hassan Kajila </strong> 
												Computer scientist, Numerician, Developer and Researcher evolving in Artificial Intelligence (Machine Learning & Computer Vision), 
												and in Data Science.<br/>
												What characterizes me is creativity. I put this skill to use in the development of software and multi-platform applications 
												(Mobile, Web, Desktop) for <?=$exp_year?> years as a freelancer.
											</p>
											<p>
												I like coding, I know it's not a very original activity, but this hobby suits me perfectly. Programming requires a certain 
												sense of organization and attention because you have to build an algorithm, manage bugs, establish a schedule, etc.<br/>
												But what I enjoy above all is spending time doing quality work, with the aim of satisfying my customers. I like people 
												to appreciate my finished products. 
												
											</p>
											<p>
												I also like to cultivate myself by reading.

											</p>
											<p>
												<b>My other hobbies</b> <br/>

												I love listening to music, it may not be very original, but for me, it's a real passion. I have downloaded a lot of albums that I like to listen to when I code.
												I also like to walk.
											</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom" >
									<div class="services color-4" style="background-color: #f2f3f7;">
										<span class="icon2"><i class="icon-book"></i></span>
										<h3>Learn</h3>
									</div>
								</div>
								

								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1" style="background-color: #f2f3f7;">
										<span class="icon2"><i class="icon-link"></i></span>
										<h3>Proactive</h3>
									</div>
								</div>

								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-2" style="background-color: #f2f3f7;">
										<span class="icon2"><i class="icon-infinity"></i></span>
										<h3>Persevering</h3>
									</div>
								</div> 

								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-4" style="background-color: #f2f3f7;">
										<span class="icon2"><i class="icon-code-outline"></i></span>
										<h3>I love Code</h3>
									</div>
								</div>

								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-7" style="background-color: #f2f3f7;">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>Curious</h3>
									</div>
								</div>

								

								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-3" style="background-color: #f2f3f7;">
										<span class="icon2"><i class="icon-group"></i></span>
										<h3>Teamwork</h3>
									</div>
								</div>

								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-2" style="background-color: #f2f3f7;">
										<span class="icon2"><i class="icon-time"></i></span>
										<h3>Punctuality</h3>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>
											I am working as a freelance, and happy to tell you <br> 
											that <?=$projects?>+ projects done successfully!
										</h2>
										<button style="background-color: #f9bf3f00;" id="openModal" class="btn-hire">Contact me</button>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</section>

			<!-- SECTION MY JOB -->
			
			
			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What I do?</span>
							<h2 class="colorlib-heading">Here are some of my expertise</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>Mobile</h3>
									<p>Mobile Android development with Java/XML and Kotlin. </br> ...
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-globe-outline"></i>
								</span>
								<div class="desc">
									<h3>Web</h3>
									<p>Fullstack web development with Php, JavaScript and HTML/CSS.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>Multiplatform App</h3>
									<p>Multiplatform Development: Android, iOS, Web, Windows with Dart/Flutter.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-6" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-power"></i>
								</span>
								<div class="desc">
									<h3>Embedded System</h3>
									<p>Arduino and Raspberry Programming with C++ and Python.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 text-center animate-box">
							<div class="services color-5" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>Database</h3>
									<p>Designing SQL and NoSQL databases with DBMSs like MariaDB, MongoDB, etc...</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-eye-outline"></i>
								</span>
								<div class="desc">
									<h3>Computer Vision</h3>
									<p>Design of basic artificial neural networks for object recognition in images.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 text-center animate-box">
							<div class="services color-8" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>Electrical</h3>
									<p>Assembly, installation and maintenance of electrical installations in buildings.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-6" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-home"></i>
								</span>
								<div class="desc">
									<h3>Domotic</h3>
									<p>Installation of solar panels and automatic home systems.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4" style="background-color: #f2f3f7;">
								<span class="icon">
									<i class="icon-chart-line"></i>
								</span>
								<div class="desc">
									<h3>Numerical tools</h3>
									<p>Handling of the numerical calculation tool. </br>...</p>
								</div>
							</div>
						</div>


					</div>
				</div>
			</section>

			<!-- SECTION LIFE STASTISTICS PANEL -->
			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/<?=$bg_coversx[$i]?>);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							
							<span class="colorlib-counter js-counter" data-from="0" data-to=<?=$coc?> data-speed="7500" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Cups of coffee</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to=<?=$projects?> data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to=<?=$clients?> data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Clients</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to=<?=$parteners?> data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partners</span>
						</div>
					</div>
				</div>
			</div>


			<!-- SECTION MY SKILLS -->


			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Programming Skills</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p>
								The programming languages that I have been able to learn and work with, the rough statistics below are the 
								result of years of learning and practice. <br>I have already worked with one of each language described in my projects
							</p>
						</div>

						<?php 

						for ($i=1; $i <= count($skills); $i++) { 
							$value = $skills[$i];

							$side = ($i%2 == 0) ? "fadeInLeft" : "fadeInRight" ;
						?>

						<div class="col-md-6 animate-box" data-animate-effect="<?=$side?>">
							<div class="progress-wrap">
								<h3><?=$value[0]?></h3>
								<div class="progress">
								 	<div class="progress-bar color-<?=$value[2]?>" role="progressbar" aria-valuenow="<?=$value[1]?>"
								  	aria-valuemin="0" aria-valuemax="100" style="width:<?=$value[1]?>%">
								    <span><?=$value[1]?>%</span>
								  	</div>
								</div>
							</div>
						</div>

						<?php } ?>

						
					</div>
				</div>
			</section>

			<!-- SECTION MY SCHOOL -->

			<!--section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box">Education</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Graphic Design
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										      		</div>
										      		<div class="col-md-6">
										      			<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Computer Science
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
													<ul>
														<li>Separated they live in Bookmarksgrove right</li>
														<li>Separated they live in Bookmarksgrove right</li>
													</ul>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingThree">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Information Technology
									            </a>
									        </h4>
									    </div>
									    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									        <div class="panel-body">
									            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
									        </div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFour">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Diploma in Information Technology
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									        <div class="panel-body">
									            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
									        </div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFive">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									        <div class="panel-body">
									            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section-->

			<!-- SECTION MY EXPERINCE -->

			<!--section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Skills</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="#">Full Stack Developer</a> <span>2017-2018</span></h2>
					                  <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
					               </div>
					            </div>
					         </article>


					         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-2">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-3">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-4">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-5">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section-->

			<!-- SECTION WORK RPOJECT -->

			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Work</span>
							<h2 class="colorlib-heading animate-box">Recent Project</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
						<!--div class="col-md-12">
							<p class="work-menu">
								<span><a href="#" class="active">Data Analysis</a></span> 
								<span><a href="#">Web Backend Dev</a></span> 
								<span><a href="#">Software</a></span> 
								<span><a href="#">Apps</a></span></p> background-size: auto|length|cover|contain|initial|inherit;
						</div-->
					</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-projet-exploress-1.jpeg); background-size: cover;">
								<div class="desc">
									<div class="con">
										<h3><a href="https://exploress.space/home" target="_blanc">Exploress Services</a></h3>
										<span>Online Marketplace (Platefrom)
											<ul>
												<li> Website</li>
												<li> Mobile Application</li>
												<li> Desktop Software</li>

											</ul>
											
										</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 152</a></span>
											<span><a href="#"><i class="icon-heart"></i> 74</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="project" style="background-image: url(images/hoc.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="https://xclassroom.hassankajila.com/" target="_blanc">x-classroom</a></h3>
										<span>Online Study (Platform)
											<ul>
												<li> Website</li>
												<li> Independent</li>
												<li> Free</li>

											</ul>
										</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 40</a></span>
											<span><a href="#"><i class="icon-heart"></i> 19</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
							<div class="project" style="background-image: url(images/anpr.jpeg);">
								<div class="desc">
									<div class="con">
										<h3><a href="/blog/abstract?id=alpr_abstract">Computer Vision : License Plate Recognition </a></h3>
										<span>A Machine Learning ANPR Application (In progress)
											<li> Library (package) can be include in real app</li>
											<li> Independent</li>
											<li> Free</li>
										</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 180</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
							<div class="project" style="background-image: url(images/kodisha1.png);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html" target="_blanc">KodishApp</a></h3>
										<span>Rental Application (In progress)
										    <ul>
												<li> Website</li>
												<li> Mobile Application</li>
												<li> Desktop Software</li>
											</ul>
										
										</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 62</a></span>
											<span><a href="#"><i class="icon-heart"></i> 4</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
							<div class="project" style="background-image: url(images/note.png);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html" target="_blanc">K.NOTE </a></h3>
										<span>App note (In progress)</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 46</a></span>
											<span><a href="#"><i class="icon-heart"></i> 9</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
							<div class="project" style="background-image: url(images/project_stats_1.jpeg);">
								<div class="desc">
									<div class="con">
										<h3><a href="https://github.com/lordyhas/python_scientific_calculus" target="_blanc">L2CS21 </a></h3>
										<span>Calcul Scientifique App
											<ul>
												<li> Solve Statistics problem</li>
												<li> Solve Probabilities problem</li>
												<li> Etc... </li>
											</ul>
										</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 78</a></span>
											<span><a href="#"><i class="icon-heart"></i> 39</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						
						<!--div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-5.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 05</a></h3>
										<span>Graphic, Logo</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="project" style="background-image: url(images/img-6.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 06</a></h3>
										<span>Web Design</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div-->
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="#" class="btn btn-primary btn-lg btn-load-more">More <i class="icon-reload"></i></a></p>
						</div>
					</div>
				</div>
			</section>

			<!-- SECTION BLOG -->

			<!--section class="colorlib-blog" data-section="blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Read</span>
							<h2 class="colorlib-heading">Recent Blog</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Renovating National Gallery</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
							<div class="blog-entry">
								<a href="blog.html" class="blog-img"><img src="images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Wordpress for a Beginner</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="blog.html" class="blog-img"><img src="images/blog-3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Make website from scratch</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
						</div>
					</div>
				</div>
			</section-->

			<!-- SECTION CONTACT -->

			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-mail"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="mail://" style="text-decoration: none;"> mail@hassankajila.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<!--p>Democratic Republic of Congo.</p-->
									<p> <a style="text-decoration: none;" target="_blank" href="https://www.google.com/travel/things-to-do?g2lb=2502548,2503771,2503781,4258168,4270442,4284970,4291517,4306835,4597339,4718358,4723331,4731329,4757164,4814050,4861688,4864715,4874190,4882660,4886082,4886480,4893075,4895528,4902087,4903082,4904256,4906050,4906855&hl=en-CD&gl=cd&cs=1&ssta=1&dest_mid=/m/0cf0s&dest_state_type=main&dest_src=dvr&sa=X&ved=2ahUKEwiDhqXumN77AhWFUMAKHSOwA4EQxA16BAhcEAU" > 
									Congo - Kinshasa.
									</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#" style="text-decoration: none;">Unknown</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name">
										</div>
										<div style="padding-top: 15px;"></div>
										<!--div class="form-group">
											<input type="text" class="form-control" placeholder="Email">
										</div-->
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Subject">
										</div>
										<div style="padding-top: 15px;"></div>
										<div class="form-group">
											<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
										</div>
										<div style="padding-top: 15px;"></div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- SECTION ABOUT ME FOOT-->

			<section class="colorlib-contact">
				<div>
				<footer class="footer_part">
					<div class="container">
						<div class="row justify-content-around">
							<div class="col-sm-6 col-lg-4">
								<div class="single_footer_part">
								<div class="animate-box" data-animate-effect="fadeInLeft">
									<div class="project" 
										style="	background-image: url(images/hassan-crop.png); 
												background-size:contain;">
										
									</div>
								</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="single_footer_part animate-box">
									<div style="padding-top: 15px;"></div>
									<h4>Quick Links</h4>
									<ul class="list-unstyled">
									    <li><a href="https://linktr.ee/hassankajila" style="text-decoration: none;">My Online Link</a></li>
										<li><a href="https://github.com/lordyhas" style="text-decoration: none;">GitHub</a></li>
										<li><a href="https://stackoverflow.com/users/14639814/lordyhas" style="text-decoration: none;">Stackoverflow</a></li>
										<li><a href="" style="text-decoration: none;">Blog</a></li>
										<li><a href="https://www.termsfeed.com/live/fe72a31c-7813-49c2-aa4b-871b097506fb" style="text-decoration: none;">Terms of Service</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-sm-6 col-lg-4">
								<div class="single_footer_part animate-box">
									<div style="padding-top: 15px;"></div>
									<h4>Newsletter</h4>
									<p>
										We don't have a newsletter service but you can leave your email
										to be informed about our products.
									</p>
									<div id="mc_embed_signup">
										<form
											action="#"
											method="post" >
											
												
											<div class="form-group">
											<input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
												class="form-control" onfocus="this.placeholder = ''"
												onblur="this.placeholder = ' Email Address '">
										    </div></br>
											
											<button type="submit" name="submit" id="newsletter-submit"
												class="btn btn-outline-primary btn-send-message">subscribe</button>
											<div class="mt-10 info"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</footer>
				</div>
			</section>


		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	<script src="/js/modal.js"></script>

	</body>
</html>

