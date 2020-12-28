<?php  
 include "conn.php";
 
 include "navUser.php";
 
 $query ="SELECT student.username,student.email,books.bid,name,author,status 
          from student INNER JOIN issue_book 
          on student.username=issue_book.username 
          INNER JOIN books on books.bid=issue_book.bid
          WHERE issue_book.approve=''";  
        
 $result = mysqli_query($db, $query);  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
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

  .container-fluid{
      color: #17a2b8;
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
    background-color:#17a2b8;
    /* background-color: #00544c; */

  }
</style>
      </head>  
      <body>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="h"><a href="dashboard.php">Dashboard</a></div>
        <div class="h"><a href="student.php">StudentInformation</a></div>
        <div class="h"><a href="requestLib.php">Books request</a></div>
        <div class="h"><a href="issueLib.php">Issue Books</a></div>
        <div class="h"><a href="books.php">Books Information</a></div>
        <div class="h"><a href="addBooks.php">Add Books</a></div>
        <div class="h"><a href="deleteUpdate.php">Delete and Updates</a></div>
      </div>

<div id="main">
 
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
        
        <div class="container-fluid">
            <?php
            if(mysqli_num_rows($result)==0)
            {
                echo "<h1><b>";
                echo "There's no  request.";
                echo "</h1></b>";
            }
            else{

        
            
            
            
            ?>

                <div class="row">
		        <div class="col-12" style="margin-top: -30px;">
		            <div class="card mt-4">
		                
		                    <h3 class="card-title m-0 p-0" style="text-align: center; background-color:grey;">Requeste of Book</h3>
		                </div>
		                <!-- /.card-header -->
		                <!-- /.card-body -->
		                <div class="card-body">
		                    <table id="books_data" class="table table-bordered table-striped table-hover">
		                        <thead>
		                            <tr>
                                    <th style="width: 15%" class="no-sort">User Name</th>
                                    <th style="width: 15%" class="no-sort">User Email</th>
                                    <th style="width: 5%">Book ID</th>
                                    <th style="width: 15%" class="no-sort">Book Name</th>
                                    <th style="width: 10%">Status</th>
                                    <th style="width: 15%" class="no-sort">Action</th>
                                    
                                           
		                            </tr>
		                        </thead>
		                        <tbody id="book_list">
                                   
		                        	<!-- Use foreach loop to feed data from the database -->
                                    <?php
                                    

                  while($row = mysqli_fetch_array($result))  
                  {
                                            echo "<tr>";
                                            echo "<td>".$row["username"]."</td>";
                                            echo "<td>".$row["email"]."</td>";
											echo "<td>".$row["bid"]."</td>";
											echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["status"]."</td>";
                                            
											echo "<td class='text-center' ><a href='approve.php?id=".$row["bid"]."&name=".$row["username"]."' style='width: 68%;' class='btn btn btn-primary btn-sm float-right' name='action'>Action</a></td>";
                                            

                     
											
											# code...
										}
									?>
			                                                   
		                        </tbody>
		                        <tfoot>
		                            <tr>
                                        <th>User Name</th>
		                                <th>User Email</th>
		                                <th>Book ID</th>
		                                <th >Book Name</th>
		                                <th>Author</th>
		                                <th>Status</th>
		                                
		                                
		                            </tr>
		                        </tfoot>
		                    </table>
		                
		            </div>
		            <!-- /.card -->
		        </div>
		        <!-- /.col -->
		    </div>
		    <!-- /.row -->
    </div>
    <?php
        }
        ?>
    <script>
		  $(function () {
		    
		    $('#books_data').DataTable({
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'ordering'    : true,
		      'info'        : true,
		      'autoWidth'   : false,
		      "columnDefs": [{ targets: 'no-sort', orderable: false }]
		    })
		  })
    </script>

    <?php
    // if(isset($_POST['submit']))
	// {
	// 	$_SESSION['name']=$_POST['username'];
	// 	$_SESSION['bid']=$_POST['bid'];
    // }

    ?>
    
</div>
</body>  
 </html>  