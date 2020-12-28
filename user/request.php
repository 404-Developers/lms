<?php  
 include "conn.php";
 
 include "navUser.php";
 
 
 $bid=$_GET['id'];
  
 ?>  
 <!DOCTYPE html>  
 <html  style="background-color: #033740;">  
      <head>  
          <title></title>  
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
          <script src="bootstrap/js/jquery-3.5.1.js"></script>
          <script src="bootstrap/js/main.js" ></script>
          <script src="bootstrap/js/bootstrap.js"></script>
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
          <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
          <!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />   -->
          <style>
  body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
	background-color: #033740;
  }

  .sidenav {
    height: 100%;
    margin-top: 90px;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:#222;
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
    color: #f1f1f1;
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
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  .h:hover{
    color: white;
    width: 300px;
    height:50px ;
    /* background-color:#17a2b8; */
	background-color: #00544c;

  }
 	.form-control
	{
	background-color: #080707;
	color: white;
	height: 40px;
	}
	label{
		color: grey;
	}
</style>
      </head>  
      <body>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="h"><a href="dashboardUser.php">Dashboard</a></div>
		<div class="h"><a href="requestbookStd.php">Books</a></div>
        <div class="h"><a href="requested.php">Requested Books</a></div>
        <div class="h"><a href="issue.php">Borrowed books Information</a></div>
		
      </div>

<div id="main"  style="background-color: #033740;">
 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; nav</span>
<!-- </div> -->

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
      
		<br /><br />  
		
	<div class="container" style=" text-align: center; margin-top:-40px; padding-right: 60px">
	<h2 style="color:black; font-family: Lucida Console; text-align: center; margin-top: 40px;">Requeste of Book</h2>
		<div class="srch">
			<br>
			<form class="col-5 border border-secondary rounded" style="margin:auto; padding:10px; width:400px;" method="post" action="" name="form1">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" value="<?php echo $_SESSION['login_user']; ?>" style="background-color:#213438;" readonly >
				</div>
				<div class="form-group">
					<label>Book Id</label>
					<input type="text" name="bid" class="form-control" value="<?php echo $bid; ?>" style="background-color:#213438;"   readonly>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-success col-3 m-1 ml-3" name="submit" value="submit">Submit</button>
					
				</div>
       
				
				
				
			</form>
		</div>


		<?php
		if(isset($_POST['submit']))
		{
			mysqli_query($db,"INSERT INTO issue_book(username,bid,approve)
							  VALUES('$_SESSION[login_user]', '$_POST[bid]','pending');");
		?>
		<script type="text/javascript">
			window.location="requested.php"
		</script>
		<?php

		}
		?>
	</div>
	
    
</div>
</body>  
</html>  
 