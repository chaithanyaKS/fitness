<!DOCTYPE html>
<?php include("func.php");?>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gym";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query1 = "SELECT * FROM `package`";
$result2 = mysqli_query($connect, $query1);
?>

<html>
<head>
    <title>Customer details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="delete.css">
    <style>
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
        border-radius:0;
        background:url("images/logo.png");
        background-size:15rem; 
        background-repeat: no-repeat;
        background-position: center;
        height:250px;
        }

        .card {
        margin-bottom: 2rem;
        }
        .table td, .table th {
        border-top: 0;
        }
        .search-bar {
        padding-top: 2rem;
        padding-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="img-container">
        <div class="logo-img"></div>
        <div class="tagline">
            <h3 >" DEDICATION DETERMINATION AND DISCIPLINE "</h3>
        </div>
    </div>	

    <div class="container">
        <div class="card">
            <div class="card-body search-bar" style="background-color:#3498DB;color:#ffffff;">
                <div class="row align-middle">
                    <div class="col-md-6 text-center"><h3>Customer Details</h3></div>
                    <div class="col-md-6">
                        <form class="form-group" action="trainer_search.php" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="search" class="form-control" placeholder="Enter name">
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="Package_id" id="pid">
                                            <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                        <option value="<?php echo $row2[0];?>" data-item="<?php echo $row2[2];?>"> <?php echo " $row2[1]";?></option>
                                            <?php endwhile;?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"> 
                                </div>
                            </div>      
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                <div class="card-body">
                    <table class="table table-hover" style="margin-bottom:5rem;">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email id</th>
                                <th>Contact</th>
                                <th>Package Name</th>
                                <th>Trainer Name</th>
                            </tr>   
                        </thead>
                        <tbody>
                            <?php get_patient_details(); ?>
                        </tbody>
                    </table>
                    <a href="admin-panel.php" class="btn btn-light ">Home</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('input').attr('autocomplete', 'off');
            $('input[name="search"]').change(function (e) {
            })
        })
    </script>
</body>
</html>