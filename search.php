<?php include 'connection.php';?>


<button><a href="addregistration.php">Back</a></button>
<br></br>

<div class="container">
    <div class="row">
       <div class="col-md-8">

                 <form action="" method="GET">
                 <div class="input-group mb-3">      
                 <input type="text" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" name="search" placeholder="search here....">
                 <button type= "submit" class="btn btn-primary">Search</button>
                 
            </div>
          </form>
       </div>
        
         <div class="col-md-12">
               <div class="card">

                     <div class="card-body">
                         
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
                      
                            if(isset($_GET['search'])){

                                $con = mysqli_connect ('localhost', 'root', '', 'registra');
                                $filtervalue = $_GET['search'];
                                $filterdata ="SELECT * FROM tblregist WHERE CONCAT(idnum,name,campus,amount) LIKE '%filtervalue%'";
                                $filterdata_run = mysqli_query($con, $filterdata);

                                if(mysqli_num_rows($filterdata_run) > 0)
                                {
                                    
                                    foreach($filterdata_run as $row)
                                    {
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
                                            <td colspan="4">No record found</td>

                                        </tr>

                                    <?php
                                 }
                            }
                      
                      
                      ?>

                     </div>
               </div>
        </div>
    </div>
</div>

</table>
                         
