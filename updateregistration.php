<?php include 'connection.php';
$id=$_GET['id'];
$select=" SELECT * FROM tblregist WHERE id= '$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>

 <div>
	  <form action ="" method="Post">
			
	   <label>ID Num :</label>
	   <input value="<?php echo $row['idnum']?>" type="text" name="idnum" placeholder="enter idnum">
	   <br></br>
	   <label>Name :</label>
	   <input value="<?php echo $row['name']?>" type="text" name="name" placeholder="enter name">
	   <br></br>
	   <label>Campus :</label>
	   <input value="<?php echo $row['campus']?>" type="text" name="campus" placeholder="enter campus">
	   <br></br>
	   <label>Amount :</label>
	   <input value="<?php echo $row['amount']?>" type="text" name="amount" placeholder=" enter amount">
	   <br></br>
	   
	   <input type="submit" name="update_btn" value="Save">
	   <button><a href= "viewregistration.php">Back</button>
		 
	  </form>
</div>

<?php
 if (isset ($_POST ['update_btn'])){
	 
    $idnum= $_POST['idnum'];
    $name= $_POST['name'];
    $campus= $_POST['campus'];
    $amount= $_POST['amount'];
	
	 
	 $update="UPDATE  tblregist SET idnum='$idnum', name='$name', campus='$campus', amount='$amount' WHERE id='$id'";
	  $data = mysqli_query($con,$update);
	 if ($data){
		?>
		 <script type= "text/javascript">
		 alert("Data Updated successfully!")
		 window.open("http://localhost/congress/viewregistration.php","_self");
		</script>
		<?php
		 
	 }
	 else
	 {
		?>
		 <script type= "text/javascript">
		 alert("Please try again!")
		</script>
		<?php
		 
	 }
 }

?>