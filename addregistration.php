<?php include 'connection.php';?>


<center><h3><a href ="addregistration.php">Register here || <a href ="index.php">Back to menu</h3></center></a></a>
<br></br>

<html>
    <head>
         <title>Registration</title>  
    </head>
          <body>
            <div>
            <form action="" method="Post">
                <label>ID Num :</label>
                <input type="text" name="idnum" placeholder="enter idnum">
                <br><br>
                <label>Name :</label>
                <input type="text" name="name" placeholder="enter name">
                <br><br>
                <label>Campus :</label>
                <input type="text" name="campus" placeholder="enter campus">
                <br><br>
                <label>Amount :</label>
                <input type="text" name="amount" placeholder="enter amount">
                <br><br>
                <input type="submit" name="save_btn" value="Save">
                <button><a href= "viewregistration.php">View</button>
                <button><a href= "search.php">Search</button>
                 </form>
              </div>
         </body>
</html>

<?php
if (isset ($_POST ['save_btn'])){

$idnum= $_POST['idnum'];
$name= $_POST['name'];
$campus= $_POST['campus'];
$amount= $_POST['amount'];

$query= "INSERT INTO tblregist(idnum,name,campus,amount) VALUES('$idnum', '$name', '$campus', '$amount')";
$data= mysqli_query($con, $query);

if($data){

    ?>
      <script type="text/javascript">
        alert("Data save successfully!")
      </script>
    <?php

    }
    else{

        ?>
        <script type="text/javascript">
        alert("Please try again!")
        </script>
        <?php


    }

}
?>
