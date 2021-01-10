<!DOCTYPE html>
<?php include("func.php");?>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "gym";
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    $query = "SELECT * FROM `customer_details`";
    $query1 = "SELECT * FROM `package`";
    // $query_get_package = 'SELECT package_id from '
    $result1 = mysqli_query($connect, $query);
    $result2 = mysqli_query($connect, $query1);
?>
<html>
<head>
    <title>Payment details</title>
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
        background:url("images/logo.png");
        background-size:15rem; 
        background-repeat: no-repeat;
        background-position: center;
        height:250px;
        }
        .p_details {
        margin-left: 20rem;
        }
        .card {
        margin-bottom: 2rem;
        }
        .table td, .table th {
        border-top: 0;
        }
        .pay:hover, select:hover {
        cursor:pointer;
        }
        .title::after, title::before {
        content: blockquote;
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
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3 text-center p_details"><h3>Payment Details</h3></div>
            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Package name</th>
                                <th>Payment type</th>
                                <th>Amount</th>
                            </tr>   
                        </thead>

                        <tbody>
                            <?php get_payment(); ?>
                        </tbody>
                    </table>

                <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Make new Payment</h3>
                </div> 
                    <form class="form-group" action="func.php" method="post">

                        <label>Customer Name</label>
                        <select class="form-control" name="customer_id" id='cid' >
                            <option default>--Select Customer--</option>
                                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                            <option  data-item="<?php echo $row1[6];?>" value="<?php echo $row1[0];?>"> <?php echo " $row1[1]";?></option>
                                <?php endwhile;?>
                        </select>
                        <br>

                        <label>Package </label>
                        <input type="text" class="form-control" id='pname' disabled><br>
                        <input type='hidden' name='package_id' id="pid">
                    

                        <label>Amount</label>
                        <input type="text" name="Amount" id='cost' class="form-control"><br>

                        <label>Payment Type</label>
                        <select name="payment_type" class="form-control" style="margin-bottom: 1rem;" required>
                            <option default>--Select Payment Type--</option>
                            <option value="cash">Cash</option>
                            <option value="cheque">Cheque</option>
                            <option value="card">Card</option>
                        </select>

                        <a href="admin-panel.php" class="btn btn-light ">Home</a>
                        <a href="package.php" class="btn btn-primary float-right" >Package details</a>
                        <input type="submit" class="btn btn-success pay float-right" style="padding-left: 2rem; padding-right: 2rem;margin-right: 1rem;" name="pay_submit" value="PAY">
                    </form>
                    <br>

                    <form class="form-group" action="payment_due.php" method="post">
                        <input type="submit" class="btn btn-success pay float-right" style="padding-left: 2rem; padding-right: 2rem;margin-right: 1rem;" name="pay_due_submit" value="Payment due">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            const package_arr = ['Preliminary','Weight Gain', 'Weight Loss']
            const package_cost = [800, 1500, 1000]

            $('input').attr('autocomplete', 'off');
            $('#cid').on('change', function () {
                index = $(this).children('option:selected').data('item');
                idx = index - 1;
                console.log(package_arr[idx], package_cost[idx]);
                $('#pname').attr('value', package_arr[idx])
                $('#cost').attr('value', package_cost[idx].toString())
                $('#pid').attr('value', index)
            })

        })
    </script>
</body>
</html>


