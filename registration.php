<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<html>

<head>



<title>Member Registration</title>

   

<link rel="stylesheet" href="css/style.css">
</head>

<body background="images/p2.jpg">

<div id="main-content" class="clearfix">
<div class="left">  


  <a href="home.php" target='blank' >Home</a> |
  
  <a href="cylinders.php" >Place Order </a> |
  
  <a href="store_locations.php" > Sales and Service Centres </a> | 
  
  <a href="contact.php" target='blank' >Contact Us </a> |
  
  
<h1 style="color:blue;">Dear User, please input all the information in the form given below for Registration</h>

<form name="registration" method="post" action="save_user.php">

<p>
<strong>User Id</strong><br/>
<input type="text" name="user_id"/>
</p>

<p>
<strong>Full Name</strong><br/>
<input type="text" name="full_name"/>
</p>

<p>
<strong>Email</strong><br/>
<input type="text" name="email"/>
</p>

<p>
<strong>Contact Number</strong><br/>
<input type="text" name="contact_number"/>
</p>

<p>
<strong>Password</strong><br/>
<input type="password" name="password"/>
</p>

<p>
<strong>Confirm Password</strong><br/>
<input type="password" name="confirm_password"/>
</p>

<p>
<strong>Location</strong><br/>
<input type="text" name="location"/>
</p>

    <?php
    if (isset($_POST['registration'])) {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $phone = $_POST['phone'];
        $area = $_POST['area'];
        $state = $_POST['state'];
        if ($password == $cpassword) {
            $query = "SELECT * FROM userlist WHERE email = ('$email')";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0) {
                echo '<script type="text/javascript"> alert("User Already Exists.")</script>';
            } else {
                $query1 = "INSERT INTO userlist (fname,email,password,phone, location, sub) VALUES ('$fname','$email','$password','$phone','$area','$state')";
                $query_run = mysqli_query($con, $query1);
                if ($query_run) {
                    echo '<script type="text/javascript"> alert("Member Add Successfully !!")</script>';
                } else {
                    echo (mysqli_error($con));
                    echo '<script type="text/javascript"> alert("!! Error !!")</script>';
                }
            }
        } else {
            echo '<script type="text/javascript"> alert("Please Enter the Values")</script>';
        }
    }
    mysqli_close($con);
    ?>




</body>

</html>
