<?php

include "../conn.php";
include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>

  <title>Books</title>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  
     
     
</head>
<body> 
  <!-- search bar -->
  <div class="form-group has-search" style="margin:10px; float:right; padding-left:800px; ">
    <form class="form-inline" action="books.php">
      <span class="fa fa-search form-control-feedback"></span>
      <input type="text"  name="search" class="form-control" placeholder="Search hear..." >
      <button class="btn btn-dark" type="submit" name="submit">Search</button>
    </form>
  </div>
  <br>
  <br>
  


  <h2 style="float:right;">List of Books</h2>
  <?php

        if(isset($_POST['submit']))
        {
          $q=mysqli_query($db,"SELECT * from  `books` where `name` like '%$_POST[search]%' ");

          if(mysqli_num_rows($q)==0)
          {
            echo "Sorry, No book found. Try searching again.";
          }
          else
          {
      echo "<table id='example' class='table table-dark' >";
          echo "<tr style='background-color: grey;' >";
              //Table header
              echo "<th>"; echo "ID"; echo "</th>";
              echo "<th>"; echo "Book-Name";  echo "</th>";
              echo "<th>"; echo "Authors Name";  echo "</th>";
              echo "<th>"; echo "Status";  echo "</th>";
              echo "<th>"; echo "Quantity";  echo "</th>";
              echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>"; 
      
            while($row=mysqli_fetch_assoc($q))
            {
              echo "<tr>";
              echo "<td>"; echo $row['bid']; echo "</td>";
              echo "<td>"; echo $row['name']; echo "</td>";
              echo "<td>"; echo $row['author']; echo "</td>";
              echo "<td>"; echo $row['status']; echo "</td>";
              echo "<td>"; echo $row['quantity']; echo "</td>";
              echo "<td>"; echo $row['department']; echo "</td>";
      
              echo "</tr>";
            }
          echo "</table>";
            }
        }
        /*if button is not pressed.*/
        else
        {
          $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

        echo "<table class='table table-dark' id='example' >";
          echo "<tr style='background-color: grey;' >";
            //Table header
            echo "<th>"; echo "ID"; echo "</th>";
            echo "<th>"; echo "Book-Name";  echo "</th>";
            echo "<th>"; echo "Authors Name";  echo "</th>";
            echo "<th>"; echo "Status";  echo "</th>";
            echo "<th>"; echo "Quantity";  echo "</th>";
            echo "<th>"; echo "Department";  echo "</th>";
          echo "</tr>"; 
    
          while($row=mysqli_fetch_assoc($res))
          {
            echo "<tr>";
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['author']; echo "</td>";
            echo "<td>"; echo $row['status']; echo "</td>";
            echo "<td>"; echo $row['quantity']; echo "</td>";
            echo "<td>"; echo $row['department']; echo "</td>";
    
            echo "</tr>";
          }
        echo "</table>";
        }   
  ?>
</body>
</html>