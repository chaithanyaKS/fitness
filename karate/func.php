<?php
$con=mysqli_connect("localhost","root","","karate");

if(isset($_POST['pat_submit'])) { 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $trainer_id=$_POST['trainer_id'];
    $package_id = $_POST['package_id'];
    $query="INSERT INTO customer_details(fname,lname,email,contact,trainer_id, package_id)VALUES('$fname','$lname','$email','$contact','$trainer_id', '$package_id')";
    $result=mysqli_query($con,$query);
     echo "$result";
     if($result) {
      echo "<script>alert('Member '$fname' added.')</script>";
      echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    else {
        echo "<script>alert('Error occurred.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
} 



if(isset($_POST['tra_submit'])) {
    $Name=$_POST['name'];
    $phone=$_POST['phone'];
    $query="iNSERT INTO Trainer(Name,phone)VALUES('$Name','$phone')";
    $result=mysqli_query($con,$query);
    if($result) {
        echo "<script>window.open('trainer.php','_self')</script>";
        echo "<script>alert('New Trainer '$Name' added.')</script>";
    }
    else {
        echo "<script>window.open('trainer_add.php','_self')</script>";
        echo "<script>alert('Error occurred')</script>";
    }
} 


if(isset($_POST['pay_submit'])) {
    $package_id=$_POST['package_id'];
    $Amount=$_POST['Amount'];
    $customer_id=$_POST['customer_id'];
    $payment_type=$_POST['payment_type'];
    $query="INSERT INTO payment(package_id,Amount,customer_id,payment_type)VALUES('$package_id','$Amount','$customer_id','$payment_type')";
    $result=mysqli_query($con,$query);
    if($result) {
        echo "<script>alert('Payment was successful.')</script>";
        echo "<script>window.open('payment.php','_self')</script>";
    }
    else {
        echo "<script>alert('Error has occurred.')</script>";
        echo "<script>window.open('payment.php','_self')</script>";
    }
} 
            
            
function get_patient_details() {
    global $con;
    $query="SELECT * FROM customer_details c, package p, trainer t
                 WHERE p.Package_id = c.Package_id
                 AND     c.trainer_id = t.Trainer_id";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)) {
        $fname=$row ['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $package_id = $row['Package_name'];
        $trainer_name=$row['Name'];
        echo "<tr>
                       <td>$fname</td>
                       <td>$lname</td>
                       <td>$email</td>
                       <td>$contact</td>
                       <td>$package_id</td>
                       <td>$trainer_name</td>
                </tr>";
    }
}


function get_package() {
    global $con;
    $query="SELECT * FROM Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)) {
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
                    <td>$Package_id</td>
                    <td>$Package_name</td>
                     <td>$Amount</td> 
               </tr>";
        
    }
}


function get_trainer() {
    global $con;
    $query="SELECT * FROM Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)) {
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
                   <td>$Trainer_id</td>
                   <td>$Name</td>
                   <td>$phone</td>  
               </tr>";
    }
}


function get_payment() {

    global $con;
    $query="SELECT p.Amount, p.payment_type, p.customer_id, c.fname, c.lname, pa.Package_name
                FROM payment AS p, customer_details AS c, package AS pa
                WHERE p.customer_id = c.customer_id
                AND pa.package_id = c.package_id
                ORDER BY c.customer_id";
    $result=mysqli_query($con,$query);
    
    while($row=mysqli_fetch_array($result)){
        $package_name=$row ['Package_name'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        $customer_fname=$row['fname'];
        $customer_lname=$row['lname'];
        echo" <tr>
                    <td>$customer_id</td>
                    <td>$customer_fname</td>
                    <td>$customer_lname</td>
                    <td>$package_name</td>
                    <td>$payment_type</td>
                    <td>$Amount</td>
                </tr>";
    }
}


function get_payment_due() {

    global $con;
    $query="SELECT DISTINCT c.fname, c.lname, c.email, c.contact, t.name,  pa.Package_name
    FROM customer_details AS c, payment AS p, package AS pa, trainer t
        WHERE c.Package_id = pa.Package_id
        AND c.trainer_id = t.trainer_id
        AND p.Payment_id = pa.Package_id
        AND c.customer_id NOT IN (SELECT customer_id FROM payment)";

    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $fname=$row ['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $trainer_name=$row ['name'];
        $package_name=$row ['Package_name'];
        echo"<tr>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$email</td>
                    <td>$contact</td>
                    <td>$package_name</td>
                    <td>$trainer_name</td>
                </tr>"; 
    }
}
?>
