<?php  
 include "conn.php";
 
 include "nav.php";
 
 
 $query ="SELECT * FROM books ORDER BY bid DESC";  
 $result = mysqli_query($db, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>
      <?php
    // include "dashboard.php";

  ?>
           <br /><br />  
           <div class="container" style="margin-top:70px;">  
                <h3 align="center">List of Books</h3>  
                <br />  
                <div class="table-responsive" style="background-color: red;">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr> 
                                    <td>BookID</td>  
                                    <td>BookName</td>  
                                    <td>AuthorName</td>  
                                    <td>Status</td>  
                                    <td>Quantity</td>  
                                    <td>Department</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["bid"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["author"].'</td>  
                                    <td>'.$row["status"].'</td>  
                                    <td>'.$row["quantity"].'</td>  
                                    <td>'.$row["department"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  