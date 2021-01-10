<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>Trainer details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
        background:url("../images/karate.jpeg");
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
        table th, table tr {
        text-align: center;
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
    <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
        <div class="row">
        <div class="col-md-5 text-center"><h3>Trainer Details</h3></div>
            <div class="col-md-5">
            <!-- TODO change trainer_search -->
                <form class="form-group" action="trainer_find.php" method="post">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" name="search" class="form-control" placeholder="Enter name">
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="trainer_search_submit" class="btn btn-light" value="Search">
                        </div>
                    </div>           
                </form>
            </div>
        </div>
    </div>

        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Trainer ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                        </tr>   
                    </thead>
                    <tbody>
                        <?php get_trainer(); ?>
                    </tbody>
                </table>
                <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
                <a href="trainer_add.php" class="btn btn-primary float-right">Add Trainer</a>
            </div>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
        $('input').attr('autocomplete', 'off');
    </script>
</body>
</html>