<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<header>
<?php

	if($_SESSION['login_user']) 
	{
?>

<nav>
        <ul>
          <li style="color: white;">
            <?php
              echo $_SESSION['login_user'];
            ?>
          </li>
          <li><a href="index.php">LOGOUT</a></li>
        </ul>
</nav>

<?php 
}

?>

<div class="logo">
      <img src="../images/logo.jpg">
      <h1 style="color: white; font-size: medium;">LIBRARY MANAGEMENT SYSTEM</h1>
      <!-- <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1> -->
    </div>
        
     
</header>