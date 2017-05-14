<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	/* Full-width input fields */
	input[type=text], input[type=password], input[type=email], input[type=number], select, textarea {
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

	.modal {
		display: block;
	}
	</style>
</head>
<body>
	<div class="modal">
		<form class="modal-content animate" action="php/registration.php" method="POST">
			<div class="container">
				<label><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="name" required>
				<label><b>Email</b></label>
				<input type="email" placeholder="Enter Email" name="email" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Age</b></label>
				<input type="number" min="12" max="99"type="text" placeholder="Enter Age" name="age" required>
				<label><b>Contact Number</b></label>
				<input type="text" placeholder="Enter Contact Number" name="contact" required>
				<label><b>Gender</b></label>
				<select placeholder="Select Gender" name="gender">
					<option value="M" selected="selected">Select Gender</option>
  					<option value="M">Male</option>
  					<option value="F">Female</option>
				</select>
				<label><b>Home Address</b></label>
				<input type="text" placeholder="Enter Home Address" name="address" required>
				<label><b>Describe your skills</b></label>
				<input type="text" name="description" required>
				<button type="submit">Next</button>
			</div>
		</form>
	</div>
</body>
</html>