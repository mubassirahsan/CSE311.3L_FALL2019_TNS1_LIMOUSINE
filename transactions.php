<?php

include_once "connection.php";

if(!mysqli_connect_errno())
{
$trans = mysqli_query($con,"SELECT * FROM transactions");
mysqli_close($con);
}


?>
<h1>Audit Table</h1>
  
  <table>
    <thead>
	   <th>Transaction ID</th>
	   <th>User ID</th>
	   <th>Amount</th>
	   <th>Time</th>
	   <th>Cylinder ID</th>
	   <th>Quantity</th>
	   
	   
	</thead>

    <tbody>

       <?php

	   foreach($trans as $tmp){ ?>
	   
	   <tr>
	      <td>echo $tmp['trans_id'];</td>
	      <td>echo $tmp['user_id'];</td>
	      <td>echo $tmp['amount'];</td>
          <td>echo $tmp['time'];</td>
	      <td>echo $tmp['cylinder_id'];</td>
		  <td>echo $tmp['quantity'];</td>
	      
		  
	   </tr> 
	   <?php }; ?>
	   
</tbody>
</table>
		
	

