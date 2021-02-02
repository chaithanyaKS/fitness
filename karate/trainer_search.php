<!DOCTYPE html>
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
    <?php
    include("func.php");
    if(isset($_POST['patient_search_submit']))
    {
    $fname=$_POST['search'];
    $package_id = $_POST['Package_id'];
    // $query="CALL `search`('$fname', '$package_id')";
    // $query="select * from customer_details where fname like '$contact%'";
    // $query="select * from customer_details, package where customer_details.package_id = package.Package_id AND fname like '$fname%'";
    $query = "select * from customer_details as c, package as p where  c.package_id=p.Package_id AND fname like '$fname%' AND c.package_id LIKE $package_id ;";
    $result=mysqli_query($con,$query);
    echo "
        <div class=\"img-container\">
            <div class=\"logo-img\"></div>
                <div class=\"tagline\">
                <h3 class=\"title\">\" DEDICATION DETERMINATION AND DISCIPLINE \"</h3>
            </div>
        </div>

    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-body\" style=\"background-color:#3498DB;color:#ffffff;\">
                <div class=\"card-body\">
                <div class=\"col-md-12 text-center\" style=\"margin-bottom: 2rem;\"><h3>Customer Search Results</h3></div>
                    <table class=\"table table-hover\" style=\"margin-bottom:5rem;\">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email id</th>
                                <th>Contact</th>
                                <th>Package Name</th>
                                <th>Trainer ID</th>
                            </tr>   
                        </thead>
                        <tbody>";
                        while ($row=mysqli_fetch_array($result)) {
                            $fname=$row ['fname'];
                            $lname=$row['lname'];
                            $email=$row['email'];
                            $contact=$row['contact'];
                            $docapp=$row ['trainer_id'];
                            $package_name=$row ['Package_name'];
                            echo "<tr>
                                        <td>$fname</td>
                                        <td>$lname</td>
                                        <td>$email</td>
                                        <td>$contact</td>
                                        <td>$package_name</td>
                                        <td>$docapp</td>
                                    </tr>";
                            }
                echo "</tbody>
                    </table>
                </div>
                <a href='trainer_details.php' class='btn btn-light' style=\" margin-right: 1rem;\">Go Back</a>
                <a href='admin-panel.php' class='btn btn-light'>Home</a>
            </div>
        </div>
    </div>";
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html> 