<?php

include_once "connection.php";

if(!mysqli_connect_errno())
{
$audit = mysqli_query($con,"SELECT * FROM audit");
mysqli_close($con);
}


?>
<h1>Audit Table</h1>
  
  <table>
    <thead>
	   <th>Transaction ID</th>
	   <th>User ID</th>
	   <th>Amount</th>
	   <th>Date</th>
	   <th>Type</th>
	   
	   
	</thead>

    <tbody>

       <?php

	   foreach($audit as $tmp){ 
	   
	   <tr>
	      <td>echo $tmp['trans_id'];</td>
	      <td>echo $tmp['user_id'];</td>
	      <td>echo $tmp['amount'];</td>
          <td>echo $tmp['date'];</td>
	      <td>echo $tmp['type'];</td>
	      
		  
	   </tr> }; 
	   
</tbody>
</table>
		
	

