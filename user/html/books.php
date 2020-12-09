<?php

include "../conn.php";
include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>

  <title>Books</title>   
</head>
<body>


  <h2 style="text-align: center; padding:35px;"><b>List of Books</b></h2>
  <?php


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
    echo "</table>"
; ?>

  

</body>


</html>