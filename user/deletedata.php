<?php

include "conn.php"; // Using database connection file here

$bid = $_GET['id']; // get book id through query string

$del = mysqli_query($db,"delete from books where bid = '$bid'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:deleteUpdate.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>