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
		<title>iTutor Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/itutorDashboard.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<style>

	/* Set a style for all buttons */
	.logout {
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
.button1 {
  border-radius: 4px;
  background-color: #4acaa8;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
    height: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 25px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 50px;
    
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
.buttonMenu
{
     padding-right: 250px;
}
/* Add padding to container elements */
.container {
    padding: 16px;
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
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
        width: 100%;
    }
}
/*Add buttons*/
.buttonAdd {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.buttonAdd:hover {background-color: #3e8e41}

.buttonAdd:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}.buttonAdd {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.buttonAdd:hover {background-color: #3e8e41}

.buttonAdd:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	</style>
	<body id="dbody">
       
		<!-- Header -->
        <section id="header">
        <header>
            <img src="../assets/images/logo-white.png" alt="" />
        </header>
        <div class="login-container animated fadeInRightBig">

                <h1><?php echo 'Welcome ' . $_SESSION['name']; ?></h1>
                <form action="php/logout.php"><button class="logout">Logout</button></form>

             

            </div> <!-- .login-container -->
            
        <!-- .login-sidebar -->
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




		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollzer.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
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
        
            
        <div class="buttonMenu">
            <center>
            <button class="button1" onclick="document.getElementById('id01').style.display='block'; var ifr=document.getElementsByName('registered_sp')[0]; ifr.src=ifr.src;"><span>Service Provider</span></button>
                <!-- The Modal (contains the Sign Up form) -->
                    <div id="id01" class="modal">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <form class="modal-content animate" action="/action_page.php">
                        <div class="container">
                        <iframe src="registered_sp.php" name="registered_sp" height="300" width="600"></iframe>
                        </div>
                      </form>
                    </div>
            <button class="button1" onclick="document.getElementById('id02').style.display='block'; var ifr=document.getElementsByName('pending_sp')[0]; ifr.src=ifr.src;"><span>Pending SP</span></button><br>
                    <!-- The Modal (contains the Sign Up form) -->
                    <div id="id02" class="modal">
                      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <form class="modal-content animate" action="/action_page.php">
                        <div class="container">
                        <iframe src="pending_sp.php" name="pending_sp" height="300" width="600"></iframe>
                        </div>
                      </form>
                    </div>
            <button class="button1" onclick="document.getElementById('id03').style.display='block'; var ifr=document.getElementsByName('customer')[0]; ifr.src=ifr.src;"><span>Costumer</span></button><br>
                <!-- The Modal (contains the Sign Up form) -->
                    <div id="id03" class="modal">
                      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <form class="modal-content animate" action="/action_page.php">
                        <div class="container">
                        <iframe src="customer.php" name="customer" height="300" width="600"></iframe>
                        </div>
                      </form>
                    </div>
            <button class="button1" onclick="document.getElementById('id04').style.display='block'; var ifr=document.getElementsByName('services_rendered')[0]; ifr.src=ifr.src;"><span>Services Rendered</span></button>
                <!-- The Modal (contains the Sign Up form) -->
                    <div id="id04" class="modal">
                      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <form class="modal-content animate" action="/action_page.php">
                        <div class="container">
                        <iframe src="payment.php" name="services_rendered" height="300" width="600"></iframe>
                        </div>
                      </form>
                    </div>
            <button class="button1" onclick="document.getElementById('id05').style.display='block'; var ifr=document.getElementsByName('services_offered')[0]; ifr.src=ifr.src;"><span>Services Offered</span></button><br>
                <!-- The Modal (contains the Sign Up form) -->
                    <div id="id05" class="modal">
                      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <div class="modal-content animate">
                        <div class="container">
                        <iframe src="services_offered.php" name="services_offered" height="300" width="600"></iframe>
                            <button class="buttonAdd" onclick="document.getElementById('id05').style.display='none'; document.getElementById('id06').style.display='block'; var ifr=document.getElementsByName('services')[0]; ifr.src=ifr.src;">
                            Add/Delete Services</button> 
                        </div>
                        </div>
                    </div>
      
                    <div id="id06" class="modal">
                      <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <form class="modal-content animate" action="/action_page.php">
                        <div class="container">
                        <iframe src="services.php" name="services" height="300" width="600"></iframe>
                        </div>
                      </form>
                    </div>
                </center>
        </div>        

        
        
	</body>
</html>