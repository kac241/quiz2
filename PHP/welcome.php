<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Kaitlyn Carey - Quiz 2 - CS 1520 </title>
		<link type="text/css" rel="stylesheet" href="../CSS/style.css" />
	</head>
	<body>
		<header> <h1> WHO ARE YOU? </h1> </header>	
		<?php 
		if(isset($_COOKIE['first'])){
			echo "<p>Hello, " . $_COOKIE['first'] . ", you recently signed up with the email address: " . $_COOKIE['email'] . "</p>";				       
		}
		else{	
		?>
			<form action="/PHP/register.php" method="post">
				<div class = "inputField" >
					<label for="firstInput">First Name</label>
					<br>
					<input type="text" name="firstInput">
				</div>
				<div class = "inputField" >
					<label for="lastInput">Last Name</label>
					<br>	
      	  			<input type="text" name="lastInput">
				</div>
				<div class = "inputField" >
        			<label for="emailInput">Email</label>
					<br>
        			<input type="text" name="emailInput">
				</div>
				<div>
					<br>
        			<button type="submit">Submit</button>
        		</div>	
			</form>
			<?php 
			}
			?>
	</body>
</html>