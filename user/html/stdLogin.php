<?php
include "../conn.php";
include "nav.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
<!-- <header style="height: 90px;">
  
<div class="logo">
      <img src="../images/logo.jpg">
      <h1 style="color: white;">LIBRARY MANAGEMENT SYSTEM</h1>
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="">BOOKS</a></li>
          <li><a href="stdLogin.php">USER-LOGIN</a></li>
          <li><a href="index.php">LOG-OUT</a></li>
          <li><a href="">FEEDBACK</a></li>
        </ul>
      </nav>
</header> -->
<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <input  type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
         <!--  <button>Login</button> -->
        </div>
      </form>
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to the Library?<a style="color: white;" href="reg.php">Sign Up</a>
      </p>
    </div>
  </div>
</section>

<?php
  
  if(isset($_POST['submit']))   //check login button is pressed or not
  {
    $count=0;
    $res=mysqli_query($db,"SELECT * FROM student WHERE username='$_POST[username]' && password='$_POST[password]';");
    $count=mysqli_num_rows($res);
     if($count==0)
     {
      ?>
        <script type="text/javascript">
             alert("Username and Password doesn't match.");      //show the message ,registration successfully
        </script>
        <!-- <div style="color: red; height: 300px; width: 300px;">
          <strong>Username and Password doesn't match.</strong>
        </div> -->
      <?php
     }
     else
     {
      ?>
        <script type="text/javascript">
          // alert("The username already exist.");
          window.location="index.php"
        </script>
      <?php
     }
  }


?>

</body>
</html>