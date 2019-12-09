<?php

include_once "connection.php";

if(!mysqli_connect_errno())
{
$users = mysqli_query($con,"SELECT user_id, full_name, email, contact_number, location, is_premium FROM users ORDER BY user_id DESC");
mysqli_close($con);
}
?>


<style>
 table,th,td
 {
 border:10px solid #c6c6c6;
 border-collapse:collapse;
 }
 th,td
 {
 padding:10px;
 }
 
 </style>

<h1>Customer List</h1>
  
  <table>
    <thead>
	   <th>User ID</th>
	   <th>Name</th>
	   <th>Email</th>
	   <th>Contact Number</th>
	   <th>Location</th>
	   <th>Subscription Type</th>
	   
	</thead>

    <tbody>

       <?php

	   foreach($users as $temp){ ?>
	   
	   <tr>
	      <td><?php echo $temp['user_id'];?></td>
	      <td><?php echo $temp['full_name'];?></td>
	      <td><?php echo $temp['email'];?></td>
          <td><?php echo $temp['contact_number'];?></td>
	      <td><?php echo $temp['location'];?></td>
	      <td><?php echo $temp['is_premium'];?></td>
		  
	   </tr> 
	   
	   <?php }; ?> 
	   
</tbody>
</table>
		
	

