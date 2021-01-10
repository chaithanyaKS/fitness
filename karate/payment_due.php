<!DOCTYPE html>
<?php include("func.php"); ?>

<html>
<head>
    <title>Patient details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        .title::after, title::before {
        content: quote;
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
        color: white;
        }
    </style>
</head>

<body>
<div class="img-container">
<div class="logo-img"></div>
<div class="tagline">
<h3 class="title">" DEDICATION DETERMINATION AND DISCIPLINE "</h3>
</div>
</div>
<div class="container">
    <div class="card">
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
            <div class="card-body">
            <div class="col-md-12 text-center" style="margin-bottom: 2rem;"><h3>Payment Due</h3></div>
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
                        <?php get_payment_due(); ?>
                    </tbody>
                </table>
            </div>
            <a href="admin-panel.php" class="btn btn-light ">Home</a>
            <a href="payment.php" class="btn btn-primary float-right" >Payment</a>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html> 