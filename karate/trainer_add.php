<!DOCTYPE html>
<?php include("func.php");?>

<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<style type="text/css">
		.img-container {
		width: 100vw;
		display:flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		}
		.logo-img {
		width: 40rem;
		border-radius:0;
		background:url("../images/karate.jpeg");
		background-size:10rem; 
		background-repeat: no-repeat;
		background-position: center;
		height:250px;
		}
		.tagline h3 {
		font-size: 1rem;
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
	</style>
</head>

<body>
	<div class="img-container">
		<div class="logo-img"></div>
		<div class="tagline">
			<h3 >" DEDICATION DETERMINATION AND DISCIPLINE  "</h3>
		</div>
	</div>
	<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<center>
						<div class="card-header ">Register New Trainer</div><br>
						<form class=class="form-group" action="func.php" method="post">
							<div class="row">
								<div class="col-md-4"><label>Trainer name: </label></div>
								<div class="col-md-8"><input type="text" name="name" class="form-control" placeholder="Enter Trainer name" required/></div><br><br>

								<div class="col-md-4"><label>Phone </label></div>
								<div class="col-md-8"><input type="textr" class="form-control" name="phone" placeholder="Enter Phone no." required/></div><br><br><br>

							</div>
							<center><input type="submit" id="inputbtn" name="tra_submit" value="Add Trainer" class="btn btn-primary"></center>
						</form>              
						</center>
						<a href="admin-panel.php" class="btn btn-link ">Home</a>
						<a href="trainer.php" class="btn btn-link float-right ">Trainer details</a>
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
$('input').attr('autocomplete', 'off');
</script>
</body>
</html>