<?php

include "../conn.php";
include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
<!-- <header>
  
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
          <li><a href="reg.php">REGISTRATION</a></li>
          <li><a href="">FEEDBACK</a></li>
        </ul>
      </nav>
</header> -->

<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="first" placeholder="First Name" required=""> <br><br>
          <input type="text" name="last" placeholder="Last Name" required=""> <br><br>
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <input type="text" name="email" placeholder="Email" required=""><br><br>
          <input type="number" name="phone" placeholder="Phone No" required=""><br><br><br>
          <input  type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> 
        </div>

          

         <!--  <button>Sign Up</button></div> -->
      </form>
     
    </div>
  </div>
</section>
<?php

      if(isset($_POST['submit']))
      {

        $count=0;                         //to check duplicate username
        $sql="SELECT username from student";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }

        if($count==0)
        {
           mysqli_query($db,"INSERT INTO STUDENT VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[phone]');");

        ?>
          <script type="text/javascript">
           alert("Registration successful");      //show the message ,registration successfully
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>



</body>


</html>