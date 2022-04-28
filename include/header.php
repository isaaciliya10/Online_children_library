
			<!DOCTYPE html>
			<html>
			<?php
			include'headers/link.php';
			?>
			<body>

			<div class="page-wrapper">
			<?php
			include'headers/header_top.php';
			?>

    <!---login modal--->
           <table C></table>
			<button onclick="document.getElementById('id01').style.display='block'" class="btn-style-one" type="submit">Login</button> 
			<div id="id01" class="w3-modal ">

			<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:450px">
			<div class="w3-justify">

			<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright"
			title="Close Modal">&times;</span>

	  <!---login html form--->

			<fieldset>
			<legend><b>Your Login Details</b></legend>

			<form class="w3-container" action="include/regist/login.php"  method="POST">

			<div class="w3-section">
			<label>Username</label>
			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Your Name..." name="username" required="required" />

			<label>Password</label>
			<input class="w3-input w3-border" type="password" placeholder="Password..." name="password" required="required" /> 

			<button class="btn-style-one w3-section w3-padding" name="login" type="submit">Login
			</button>
			</form> 

			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
			<button onclick="document.getElementById('id01').style.display='none'" type="cancel" class="w3-btn w3-white">Cancel</button>

			<span class="w3-right w3-padding w3-hide-small">Forgot password?</span> 

			</div>
			</div>
			</fieldset>
			</div>
			</div>
			</div>

	<!---sing up modal--->

			<button onclick="document.getElementById('id02').style.display='block'" class="btn-style-one" type="submit">Sign Up</button> 
			<div id="id02" class="w3-modal ">

			<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:450px">
			<div class="w3-justify">

			<span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright"
			title="Close Modal">&times;</span>


	<!---sign up form--->
            <fieldset>
			<legend><b>Your Sign up Details</b></legend>

			<form class="w3-container" action="include/regist/signup.php"  method="POST">
			<div class="w3-section">

			<label>First Name</label>
			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Your Name..." name="fname" required="required" />

			<label>Surname</label>
			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Your Surname..." name="surname" required="required" />

			<label>Password</label>
			<input class="w3-input w3-border" type="password" placeholder="Password..." name="pass" required="required" /> 

			<label>Confirm Password</label>
			<input class="w3-input w3-border" type="password" placeholder="Confirm Password.." name="cpass" required="required" /> 

			<button class="btn-style-one w3-section w3-padding" name="submit" type="submit">Sign UP
			</button>

			</form>  
			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">

			<button onclick="document.getElementById('id02').style.display='none'" type="cancel"  class="w3-btn w3-white">Cancel</button>

			<span class="w3-right w3-padding w3-hide-small"><input type="checkbox">Remember me</span>    
			</div>
			</div>
			</fieldset>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>

	<!---php include header--->
			<?php
			include'headers/nav.php';
			?>