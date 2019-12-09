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


<p>
<strong>Do you want Premium Subscription?</strong><br/>
<select name="subscription">
<option value = "yes">Yes</option>
<option value = "no">No</option>
</select>
</p>

<p>
<input type="submit" name="register" value="Register"/>
</p>

</form>

</html>