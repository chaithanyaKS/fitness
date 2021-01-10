<!DOCTYPE html>
<!-- include func.php -->

<?php
  $message="";
  if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","gym");
	$result = mysqli_query($conn,"SELECT * FROM logintb WHERE username='" . $_POST["username"] . "' AND password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
	echo $message;
  }
?>

<html lang="en">
<head>
<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<style type="text/css">
		body {
		background: url('../images/landing-page.jpeg');
		background-color: red;
		}
		h3 {
		font-size: 1.5rem;
		text-align: center;
		color:rgb(197, 197, 197);
		}
		#inputbtn:hover{cursor:pointer;}
		.card {
		width: 45rem;
		padding: 0;
		}

		.form-control {
		margin-bottom: 1rem;
		}
		.card-header {
		border: none;
		outline: none;
		background-color: inherit;
		font-size: 2.5rem;
		}
		.heading {
		margin-bottom: 8rem;
		color: white;
		word-spacing: 10px;
		font-size: 3rem;
		}
	</style>
</head>
<!-- style="background:url('images/4.jpg'); background-size: cover;" -->
<body>
<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
	<div class="row d-flex justify-content-center">
		<div class="col-md-6">
			<div class="container">
				<div class="heading">
					<h1 class="text-center">Friends Fitness Center</h1>
					<h3 >" DEDICATION DETERMINATION AND DISCIPLINE "</h3>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
				<center>
					<div class="card-header">Admin Login</div><br>
					<form class="form-group" method="POST" action="admin-panel.php">
						<div class="row">
							<div class="col-md-4"><label>Username: </label></div>
							<div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="Enter Username" required/></div><br><br>
							<div class="col-md-4"><label>Password: </label></div>
							<div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="Enter Password" required/></div><br><br><br>
						</div>
						<center><input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary"></center>
					</form>              
				</center>
				</div>
			</div>
		</div>
	<div class="col-md-7"></div>
	</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$('input').attr('autocomplete', 'off');

			$("#inputbtn").bind("click", function(event) {
				let username = $('.form-control[name="username"]').val();
				let password = $('.form-control[name="password"]').val();
				event.preventDefault();
				if(username === 'admin' && password === 'pass'){
					$(this).unbind(".myclick");
					// window.open('payment.php','_self');
					window.location.href='GorK.php'
				}
				else {
					alert('Enter proper credentials');
				}
			});
		})
	</script>
</body>
</html>