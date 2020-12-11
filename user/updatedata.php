<?php
  include "conn.php";
  include "navUser.php";
  
?>

<!DOCTYPE html>
<html style="background-color: #033740;">
<head>
	<title>Books</title>
	<style type="text/css">
		
    body
    {
    background-color: #033740;
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
    }

    .form-control
    {
    background-color: #080707;
    color: white;
    height: 40px;
    }

	</style>


</head>
<body>  
<div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center; margin-top: 40px;"><b>Upadate Details</b></h2>
    
    <form class="col-5 border border-secondary rounded" style="margin:auto; padding:10px; width:400px;" action="" method="post">
        
        <!-- <input type="number" name="bid" class="form-control" placeholder="Book ID" required=""><br> -->
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <!-- <input type="text" name="status" class="form-control" placeholder="Status" required=""><br> -->
        <select class="form-control" style="color: grey;" name="status" placeholder="Status" id="status" required="">
						<option  value="">Status</option>
						<option value="available">Available</option>
						<option value="not availlable">Not Available</option>
        </select><br>
        <input type="number" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>

        <div class="form-group row">
            <button type="submit" class="btn btn-success col-3 m-1 ml-3" name="update" value="update">Update</button>
            <a href="books.php" class="btn btn-dark m-1">View updated books</a> 
        </div>
        
        <!-- <button style="text-align: center;" class="btn btn-dark" type="submit" name="submit">ADD</button> -->
       
        
       
    </form>
    
</div>
  
  <?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        $res="INSERT INTO books VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;";
        mysqli_query($db,$res);
        ?>
          <script type="text/javascript">
            window.location="addbooks.php"
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#024629";
}
</script>

</body>
