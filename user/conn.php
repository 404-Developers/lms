<?php
 
//$connection=mysqli_connect(server,user,pass,name)
$db=mysqli_connect('localhost','root','rosi1234','library');

//   mysqli_connect_errno();             checking connection



if(mysqli_connect_errno())
{
    die('Database connection failed' .mysqli_connect_error());
}
else{
   // echo "connection successful";

}

 
 ?>