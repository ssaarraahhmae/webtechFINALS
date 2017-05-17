<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Log In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<style>
/* Full-width input fields */
input[type=text1], input[type=password] {
    width: 95%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #665851;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;;
    border: none;
    cursor: pointer;
    width: 25%;
    float: center;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:center;width:25%}

/* Add padding to container elements */
.container1 {
    padding: 50px;
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
    margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
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

/* Clear floats */
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
<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">iTuToR <span>LogIn</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Customer!</h2>
			</div>
       <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
      ?>
      <form action="php/clientlogin.php" method="POST">
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" id="password">
			<br/>
			<button type="submit">Log in!</button>
			<br/>
      </form>
			<p class="small">Dont Have an Account?<br></p>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" type="submit">Sign Up!</button>
		</div>
	</div>
    
    <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="php/registration.php" method="POST">
    <div class="container1">
      <label><b>Name</b></label><br>
      <input type="text1" placeholder="Enter Name" name="name" required><br>
        
        
      <label><b>Email</b></label><br>
      <input type="text1" placeholder="Enter Email" name="email" required><br>

      <label><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw" required><br>

      <label><b>Repeat Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
        
        <label><b>Contact #</b></label><br>
      <input type="text1" placeholder="+63xxxxxxxx" name="cpNumber" required><br>
        
        <label><b>Address</b></label><br>
      <input type="text1" placeholder="Enter Address" name="addrss" required><br>
          <input type="radio" name="gender" value="M"> Male<br>
          <input type="radio" name="gender" value="F"> Female<br>
        <br>
      <input type="checkbox" checked="checked">By creating an account you agree to our <a href="#">Terms & Privacy</a>.

      
        
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

    
</body>
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

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>
