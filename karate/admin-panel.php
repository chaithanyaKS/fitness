
<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "karate";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";
$query1 = "SELECT * FROM `package`";


$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query1);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<style>
body{
  text-transform: capitalize;
}
.img-container {
  width: 100vw;
  display:flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 2rem 0;
}
.logo-img {
    width: 40rem;
    /* margin: 0 auto; */
    border-radius:0;
    background:url("../images/karate.jpeg");
    background-size:15rem; 
    background-repeat: no-repeat;
    background-position: center;
    height:250px;
}
</style>
</head>
<body>

  <div class="img-container">
    <div class="logo-img"></div>
      <div class="tagline">
        <h3>" DEDICATION DETERMINATION AND DISCIPLINE  "</h3>
      </div>
  </div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        <div class="list-group">
            <h4 class="list-group-item active bg-info">Customers</h4>
            <a href="trainer_details.php" class="list-group-item">Customer details</a>
            <a href="package.php" class="list-group-item">Package details</a>
            <a href="payment.php" class="list-group-item">Payments</a>
        </div>
        <hr>

        <div class="list-group">
            <h3 class="list-group-item active bg-info">Trainers </h3>
            <a href="trainer.php" class="list-group-item">Trainer details</a>             
            <a href="trainer_add.php" class="list-group-item">Add new Trainer</a>
        </div>      
        </div>

        <div class="col-md-8">
            <div class="card" style=" border: none; ">

                <div class="card-body bg-primary text-white bg-info" style="margin-bottom:2rem;">
                    <h4>Register new members</h4>
                </div> 
                <form class="form-group" action="func.php" method="post">
                    <label>First name:</label>
                    <input type="text" name="fname" class="form-control" required autofocus><br>

                    <label>last name:</label>
                    <input type="text" name="lname" class="form-control" required><br> 

                    <label>email</label>
                    <input type="email" name="email" id="email" class="form-control" required><br>

                    <label>Phone</label>
                    <input type="tel" name="contact" class="form-control" required><br>

                    <label>Package Name</label>
                    <select class="form-control" name="package_id" id="pid">
                        <option default>--Select Package--</option>
                        <?php while($row2 = mysqli_fetch_array($result2)):;?>
                        <option value="<?php echo $row2[0];?>" data-item="<?php echo $row2[2];?>"> <?php echo " $row2[1]";?></option>
                        <?php endwhile;?>
                    </select>

                    <label>Trainer </label> 
                    <select class="form-control" name="trainer_id" id="tid">
                        <option value="" default>--Select Trainer--</option>
                        <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>"> <?php echo "$row1[1]";?></option>
                        <?php endwhile;?>
                    </select>
                    <br>     

                    <input type="submit" class="btn btn-primary" name="pat_submit" value="Register">  
                    <a href="func.php" class="btn btn-light"></a>


                </form>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

<header>
    <nav>
        <div class="main-wrapper">
            <div class="nav-login">
                <button type="submit" id='logout' class="btn btn-danger" style="margin-bottom: 2rem; margin-left: 1rem;" name="submit">logout</button>
            </div>
        </div>
    </nav>
</header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
    $('input').attr('autocomplete', 'off');
    $('#email').focusout(function() {
        let value = $(this).val()
        $(this).val(`${value}@gmail.com`)
    })
    $('#logout').on('click', () => window.location.href = 'http://localhost/fitness/gym/index.php')
    </script>
    
</body>
</html>
   