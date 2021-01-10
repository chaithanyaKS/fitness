<!DOCTYPE html>
<?php 
	 include_once 'header.php';
?>	 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	
	<section class="main-container">
		 <div class="main-wrapper">
			<h2>signup</h2>
			<form class="signup-form" action="includes/signup.inc.php" method="POST">
				<input type="text" name="first" placeholder="firstname">
				<input type="text" name="last" placeholder="lastname">
				<input type="email" name="email" placeholder="e-mail">
				<input type="text" name="uid" placeholder="username">
				<input type="password" name="pwd" placeholder="password">
				 <button type="submit" name="submit">sign up</button>
			</form>
		 </div>	
	</section>
	<?php
		include_once 'footer.php';
	?>	
</body>
</html>
	 
  