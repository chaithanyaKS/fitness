<html>
<head>
	<title>Patient details</title>
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
    color: white;
}
</style>
</head>
<body>
    <?php
include("func.php");
if(isset($_POST['trainer_search_submit'])) {
    $contact=$_POST['search'];
    $query="select * from trainer where Name like '$contact%'";
    $result=mysqli_query($con,$query);
    echo " 
    <div class=\"img-container\">
    <div class=\"logo-img\"></div>

    <div class=\"tagline\">
    <h3 >\" DEDICATION DETERMINATION AND DISCIPLINE \"</h3>
    </div>

    </div>
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-body\" style=\"background-color:#3498DB;\">
                <div class=\"col-md-12 text-center\" style=\"margin-bottom: 2rem; color: white;\">
                    <h3>Trainer Search Results</h3>
                </div>

                <div class=\"row\">
                    <div class=\"card-body\" style=\"background-color:#3498DB;\">
                        <div class=\"card-body\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Trainer ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                    </tr>   
                                </thead>
                                <tbody>";
                                    while ($row=mysqli_fetch_array($result)) {
                                        $t_id=$row ['Trainer_id'];
                                        $name=$row['Name'];
                                        $phone=$row['phone'];
                                            echo "    <tr>
                                                            <td>$t_id</td>
                                                            <td>$name</td>
                                                            <td>$phone</td>
                                                         </tr>";
                                        }
        echo "
                                </tbody>
                            </table>
                        </div>
                        <a href='trainer.php' class='btn btn-light'>Go Back</a>
                    </div>
                </div>";
}
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html> 