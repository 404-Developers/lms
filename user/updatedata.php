<?php  
 include "conn.php";
 
 include "navUser.php";
 
 
$bid=$_GET['id'];
$result = mysqli_query($db,"select * from books where bid = '$bid'");
while($row = mysqli_fetch_array($result))  
{
  
  $name= $row["name"];
  $author=$row["author"];
  $status= $row["status"];
  $quantity= $row["quantity"];
  $department= $row["department"];

}

 
 ?>  

<!DOCTYPE html>
<html style="background-color: #033740;">
<head>
	<title>Books</title>
	<style type="text/css">
		
    body
    {
    background-color: #033740;
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
    }

    .form-control
    {
    background-color: #080707;
    color: white;
    height: 40px;
    }
    label{
      color: grey;
    }

	</style>


</head>
<body> 

<div class="container" style=" text-align: center; margin-top:-40px; padding-right: 60px">
    <h2 style="color:black; font-family: Lucida Console; text-align: center; margin-top: 40px;"><b>Upadate Details BookID=<?php echo $bid; ?></b></h2>
    
    <form class="col-5 border border-secondary rounded" style="margin:auto; padding:10px; width:400px;" method="post">
        
        <div class="form-group">
					<label>Book Name</label>
					<input type="text" class="form-control" name="name" value="<?php  echo $name ?>" >
				</div>
        <div class="form-group">
					<label> Author</label>
				  <input type="text" name="authors" class="form-control" placeholder="Authors Name" value="<?php  echo $author ?>">
        </div>
        
        <div class="form-group">
          <label>Status</label>
            <select class="form-control mb-3" name="status" id="status"  >
              <option value="<?php  echo $status; ?>"><?php  echo $status; ?></option>
              <option value="available">Available</option>
              <option value="not availlable">Not Available</option>
            </select> 
        </div>
        
        <div class="form-group">
					<label>Quantity</label>
					<input type="number" name="quantity" class="form-control" placeholder="Quantity" value="<?php  echo  $quantity; ?>">
        </div>
        <div class="form-group">
					<label>Departmemnt</label>
					<input type="text" name="department" class="form-control" placeholder="Department" value="<?php  echo  $department; ?>" >
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-success col-3 m-1 ml-3" name="update" value="update">Update</button>
            <a href="books.php" class="btn btn-dark m-1">View updated books</a> 
        </div>
       
        
        <!-- <button style="text-align: center;" class="btn btn-dark" type="submit" name="submit">ADD</button> -->
       
        
       
    </form>

    <?php
    	if(isset($_POST['update']))
      {
        mysqli_query($db,"UPDATE  books
                  SET  name =  '$_POST[name]', author = '$_POST[authors]', status =  '$_POST[status]', 
                  quantity =  '$_POST[quantity]' , department =  '$_POST[department]'
                  WHERE bid='$bid';");                      //update query
  
       
        
      ?>
      <script type="text/javascript">
        alert("Updated successfully.");
        window.location="deleteUpdate.php"
      </script>
      <?php
  
      }

    ?>
    
</div>
  
  



</body>

</html>
