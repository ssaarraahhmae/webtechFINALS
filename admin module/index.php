<?php
session_start();
?>

<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>iTutor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<style>
	/* Full-width input fields */
	input[type=text], input[type=password] {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
	}

	/* Set a style for all buttons */
	button {
	    background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 100%;
	}

	button:hover {
	    opacity: 0.8;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
	    width: auto;
	    padding: 10px 18px;
	    background-color: #f44336;
	}

	/* Center the image and position the close button */
	.imgcontainer {
	    text-align: center;
	    margin: 24px 0 12px 0;
	    position: relative;
	}

	img.avatar {
	    width: 40%;
	    border-radius: 50%;
	}

	.container {
	    padding: 16px;
	}

	span.psw {
	    float: right;
	    padding-top: 16px;
	}

	/* The Modal (background) */
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	    padding-top: 60px;
	}

	/* Modal Content/Box */
	.modal-content {
	    background-color: #fefefe;
	    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	    border: 1px solid #888;
	    width: 25%; /* Could be more or less, depending on screen size */
	}

	/* The Close Button (x) */
	.close {
	    position: absolute;
	    right: 25px;
	    top: 0;
	    color: #000;
	    font-size: 35px;
	    font-weight: bold;
	}

	.close:hover,
	.close:focus {
	    color: red;
	    cursor: pointer;
	}

	/* Add Zoom Animation */
	.animate {
	    -webkit-animation: animatezoom 0.6s;
	    animation: animatezoom 0.6s
	}

	@-webkit-keyframes animatezoom {
	    from {-webkit-transform: scale(0)} 
	    to {-webkit-transform: scale(1)}
	}
	    
	@keyframes animatezoom {
	    from {transform: scale(0)} 
	    to {transform: scale(1)}
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
	    span.psw {
	       display: block;
	       float: none;
	    }
	    .cancelbtn {
	       width: 100%;
	    }
	}
	</style>
	<body>
		<!-- Header -->
			<section id="header">
				<header>
					<img src="images/logo.png" alt="" />
	
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active"><i class="fa fa-info-circle" aria-hidden="true"> About</i></a></li>
						<li><a href="#two"><i class="fa fa-book" aria-hidden="true"> Services</i></a></li>
						<li><a href="#three"><i class="fa fa-users" aria-hidden="true"> Job Openings</i></a></li>

						<li><a href="#five"><i class="active" class="fa fa-sign-in" aria-hidden="true"> Log in</i></a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
										<h2>About us</h2>
									</header>
									<p>iTutor is a young and dynamic organization intent on providing human resource solutions which focus on personnel empowerment. We open doors to oppurtunities by providing versatile programs that not only seek to share knowledge but encourage growth and the development of potential. In each undertaking we strive to achieve conglomerate success through individual progress.</p>
									<p>iTutor specializes in Academic and Professional Education, Training and Development that specifically meets every individual or company needs in both group or individual set up. Our main Tutorial Center for in-house tutoring is located in Baguio City. Our experienced staff members possess the credentials and expertise to help you achieve your training objectives. We provide the ultimate cost effective academic and training solutions for companies who are cost cutting or private individuals with limited budget. We are proud to say that we are currently the cheapest but first rate quality educational and training provider in the Philippines.</p>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
                                <div class="block">
								<div class="container">
									<h3>Services</h3>
									<p>Here are the services that we provide</p>
									<div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                      <div class="panel-heading accordion-caret">
                                        <h4 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Tutorial Services
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <li>Pre-school</li>
                                            <li>Grade School</li>
                                            <li>High School</li>
                                            <li>College Advance</li>
                                            <a href="#" class="btn">More Info</a>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default">
                                      <div class="panel-heading accordion-caret">
                                        <h4 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Special Workshop
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <li>Dance Workshop</li>
                                            <li>Voice Lessons</li>
                                            <li>Guitar Lessons</li>
                                            <li>Violin Lessons</li>
                                            <li>Piano Lessons</li>
                                            <a href="#" class="btn">More Info</a>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default">
                                      <div class="panel-heading accordion-caret">
                                        <h4 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                           Educational Services 
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <li>Toddlers</li>
                                            <li>Pre-Nursery Tutorials</li>
                                            <li>Reading and Writing Tutorials</li>
                                            <li>Special Education</li>
                                            <li>Math Tutorial</li>
                                            <li>English Tutorial</li>
                                            <li>Science Tutorial</li>
                                            <a href="#" class="btn">More Info</a>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default">
                                      <div class="panel-heading accordion-caret">
                                        <h4 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            Training Services
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <li>Basic Computer Application</li>
                                            <li>MS Office Familiarization</li>
                                            <li>English Proficiency for Filipinos and Foreigners</li>
                                            <li>Financial Planning</li>
                                            <li>Video Editing Lessons</li>
                                            <li>Programming Lessons</li>
                                            <a href="#" class="btn">More Info</a>
                                          </div>
                                      </div>
                                    </div> 
                                    </div>
                                 </div>
                                </div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Jop Openings</h3>
									<p>Maglagay ka kung ano maiilagay diyan</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/academics.jpg" alt="" /></a>
											<div class="inner">
												<h4>Acedmic Teachers/ Tutors</h4>
												<li>Graduate of 4-year course. BS Education Major in Elementary, English, Math, Science Education or any related field.</li>
												<li>LET passer is an advantage.</li>
												<li>Work experience in the same poisition is an advantage</li>
												<li>Computer literate. Can do monitoring and progress report of his/her students.</li>
												<li>Diligent, punctual, hard-working, patient, professional, and exhibits maturity and integrity.</li>
												<li>Must be dynamic, flexible and has strong inter-personal skills and loves kids.</li>
												<li>Willing to work in Baguio City is preferred.</li>
												<li>Fresh graudate or at least 2nd year college undergraduates are welcome.</li>
												<li>Part-time and full-time positions available.</li>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/dance.jpg" alt="" /></a>
											<div class="inner">
												<h4>Dance Teacher/ Instructor</h4>
                                                <li>Male/Female</li>
												<li>Graduate/College Level of any course</li>
												<li>Ability to demonstrate basic to intermediate steps in hip-hop, modern and other forms of dancing.</li>
												<li>Design and execute lesson plans, modules, and test for assigned elssons.</li>
												<li>Outgoing, personable and loves working with and making people happy.</li>
												<li>Must be dynamic, flexible and must possess strong inter-personal skills.</li>
												<li>Ability to work and interact well with other, particularly students and parents.</li>
												<li>Willing to work within the Metro Manila area, inhouse and homebased classes.</li>
												<li>Must be dynamic, flexible and has strong inter-personal skills and loves kids.</li>
                                                <li>Can handle kids to adults level.</li>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/music.png" alt="" /></a>
											<div class="inner">
												<h4>Musical Instruments Teacher/Tutor</h4>
												<li>Graduate of Conservatory in Music is a plus but not required.</li>
												<li>In-depth musical knowledge.</li>
												<li>Willing to be assigned in Baguio City in-house and homebased class.</li>
												<li>Adapts easily to change as well as teaching schedules.<br>Design and execute lesson plans, modules, and tests for assigned lessons.</li>
												<li>Can handle kids to adult level.</li>
												<li>Willing to work Monday-Friday, and even weekends.</li>
												<li>Diligent, punctual, hard-workings, patient, professional, and exhibits maturity and integrity.</li>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/sped.png" alt="" /></a>
											<div class="inner">
												<h4>Special Education (SPED) Teacher/ Tutor</h4>
												<li>Candidate must possess at least a College Degree Diploma in Education/ Teaching/ Training or equivalent degrees.</li>
												<li>Ability to work and interact with others, particularly students.</li>
												<li>Has good communication and interpersonal skills.</li>
												<li>Can work in a fast-paced, dynamic environment.</li>
                                                <li>With work experience in handling special needs individuals.</li>
												<li>Able to develop an IEP or therapy plan for students with special needs.</li>
												<li>Proficient in verbal and written English and Filipino Language.</li>
                                                <li>Creative, patient, dedicated and motivated towards making a difference in the development of special needs individuals.</li>
												<li>Willing to work within Metro Manila Area. In-house and Home -Based.</li>
												<li>Has a heart for children with special needs.</li>
												<li>Fresh graduates or at least 2rd year college undergraduates are welcome.</li>
                                                <li>Full-Time and part-time positions available.</li>
											</div>
										</article>
									</div>
								</div>
							</section>

							<!-- Five -->
							<section id="five">
								<div class="container">
									<h3>Log-in as: </h3>
									<p>Client</p>

									<button onclick="" style="width:auto;">Login</button>
									<p>Service Provider</p>

									<button onclick="" style="width:auto;">Login</button>

									

								</div>
							</section>
					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; All rights reserved.</li><li>Design: iTutor</li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
			// Get the modal
			var modal = document.getElementById('id01');


			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}
			</script>

	</body>
</html>