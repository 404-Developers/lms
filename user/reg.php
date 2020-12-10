<?php

include "conn.php";
include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>


<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1><br>
      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="number" name="phone" placeholder="Phone No" required=""><br>
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