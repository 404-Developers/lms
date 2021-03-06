<?php
  include "conn.php";
  include "navUser.php";
  
?>

<!DOCTYPE html>
<html style="background-color: #033740;">
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {
  background-color: #033740;
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top: 90px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  background-color:#033740;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/* .img-circle
{
	margin-left: 20px;
} */
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
    background-color:#17a2b8;
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
	<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

            </div><br><br>

            <div class="h"><a href="dashboard.php">Dashboard</a></div>
            <div class="h"><a href="books.php">Books Information</a></div>
            <div class="h"><a href="addBooks.php">Add Books</a></div>
            <div class="h"><a href="deleteUpdate.php">Delete and Updates</a></div>
            <div class="h"><a href="student.php">StudentInformation</a></div>
            <div class="h"><a href="requestLib.php">Books request</a></div>
            <div class="h"><a href="issueLib.php">Issue Books</a></div>
            <div class="h"><a href="expire.php">Expired Books</a></div>
    </div>

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; nav</span>
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add New Books</b></h2>
    
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
        
        <button style="text-align: center;" class="btn btn-dark" type="submit" name="submit">ADD</button>
       
        
       
    </form>
    
  </div>
  
  <?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        $res="INSERT INTO books VALUES (null, '$_POST[name]', '$_POST[authors]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;";
        mysqli_query($db,$res);
        ?>
          <script type="text/javascript">
            alert("added successfully.");
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
</div>
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
</html>
