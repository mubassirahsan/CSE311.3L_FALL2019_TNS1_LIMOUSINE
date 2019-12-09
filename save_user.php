<?php

include_once "connection.php";

$sql="INSERT INTO users

(user_id, full_name, email, contact_number, password, is_premium)

VALUES('".$_POST['user_id']."','".$_POST['full_name']."','".$_POST['email']."','".$_POST['contact_number']."','".md5($_POST['password'])."','".$_POST['subscription']."');";

if(mysqli_query($con,$sql)){

?>

<h1>Registration Successful!</h1>

<?php
} else{
	echo "Error: ";
}
	
	mysqli_close($con);
 


?>
