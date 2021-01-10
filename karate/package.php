<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>Members details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        .p_details h3{
        width: 20rem;
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
        .p_details {
        margin-left: 25rem;
        }
        .card {
        margin-bottom: 2rem;
        }
        .table td, .table th {
        border-top: 0;
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
            <div class="col-md-12 p_details "><h3>Package Details</h3></div>
            </div>
                <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                    <table class="table table-hover" style="margin-bottom:5rem;">
                        <thead>
                            <tr>
                                <th>Package ID </th>
                                <th>Package Name</th>
                                <th>Amounts</th>
                            </tr>   
                        </thead>
                        <tbody >
                            <?php get_package(); ?>
                        </tbody>
                    </table>
                    <a href="admin-panel.php" class="btn btn-light">Home</a>
                    <a href="payment.php" class="btn btn-primary float-right" >Payment</a>
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