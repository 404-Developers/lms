<?php

include "../conn.php";
include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>

<<<<<<< HEAD
  <title>Books</title>
  <style type="text/css">
      .srch
      {
          <padding-Left: 1000px;
      }
      </style>   
</head>
<body> 
  <div class="srch">
    <form class="navbar-form" method="post" name="form1">
      
        <input class="form-control" type="text" name="search" placeholder="search books.." required="">
        <button style="backgroud-color:grey1; " type="submit " name="submit" class="btn-btn-default">
            <span class="glyphicon glyphicon-search"></span>
        </button>
  
      
    </form>
  </div>
  
=======
  <title>Books</title>   
</head>
<body>
>>>>>>> a3b9a4e8d81bd39bdc8c852a43bb448326228193


  <h2>List of Books></h2>
  <?php

        if(isset($_POST['submit']))
        {
          $q=mysqli_query($bd,"SELECT * from books where name like '%$_POST[search]%' ");

          if(mysqli_num_rows($q)==0)
          {
            echo "Sorry, No book found. Try searching again.";
          }
          else
          {
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