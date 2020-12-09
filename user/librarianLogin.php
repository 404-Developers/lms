<?php
  include "conn.php";
  include "nav.php";
  
  
  
?>

<!DOCTYPE html>
<html>
<head>

  <title>Librarian Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">Librarian Login Form</h1><br>
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
        New to the Library?<a style="color: white;" href="libReg.php">Sign Up</a>
      </p>
    </div>
  </div>
</section>

<?php
  
  if(isset($_POST['submit']))   //check login button is pressed or not
  {
    $count=0;
    $res=mysqli_query($db,"SELECT * FROM admin WHERE username='$_POST[username]' && password='$_POST[password]';");
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
      $_SESSION['login_user']=$_POST['username'];

      ?>
        <script type="text/javascript">
          // alert("The username already exist.");
          window.location="dashboard.php"
        </script>
      <?php
     }
     
  }


?>

</body>
</html>