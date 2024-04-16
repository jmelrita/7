<?php include 'connection.php'?>


<button><a href="addregistration.php">Add</a></button>
<br></br>


<table border="1px" cellpadding="10px" cellspacing="0">

       <tr>
	    <th></th>
		
	   <th>ID#</th>
	   <th>Name</th>
	   <th>Campus</th>
	   <th>Amount</th>
	  	   
	   <th colspan="2">Actions</th>
	   </tr>
	   <?php
	    $query="SELECT * FROM tblregist ";
		$data=mysqli_query ($con,$query);
		$result=mysqli_num_rows ($data);
		if ($result){
			
			while ($row=mysqli_fetch_array($data)){
				?>
				      <tr>
					      <td><?php echo $row['id'] ?></td>
					      <td><?php echo $row['idnum'] ?></td>
						  <td><?php echo $row['name'] ?></td>
						  <td><?php echo $row['campus'] ?></td>
						  <td><?php echo $row['amount'] ?></td>
						  
						  
						  <td><a href="updateregistration.php?id=<?php echo $row['id']; ?>">Edit<a/> </td>
						  <td><a href="deleteregistration.php?id=<?php echo $row['id']; ?>">Delete<a/> </td>
						  
					  </tr>
				<?php
				
   	    	}
		}
		else
		{
		?>
		<tr>
		    <td>No Record Found</td>
		
		</tr>
		
		<?php
		}
	   ?>
</table>