<?php

include "../conn.php";
include "nav.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Library Management System</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>




<body>
	<div class="wrapper">
		<!-- <header>
		<div class="logo">
			<img src="../images/logo.jpg">
			<h1 style="color: white;  font-size: medium;">LIBRARY MANAGEMENT SYSTEM</h1>
		</div>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="stdLogin.php">USER-LOGIN</a></li>
					<li><a href="lib.php">LIBRARIAN</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
		</header> -->
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to SLTC library</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 17:00 </h1><br>
			</div>
		</div>
		</section>
		<?php
		include "footer.php";
		?>
	</div>
</body>

</html>