<?php

session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
			
		}
	else
	{
		header('location: ../index.php');
	}
?>
<?php
    include('header.php');
	include('titlehead.php');
	include('../dbcon.php');
	$sid=$_GET['sid'];
	$sql="SELECT * FROM `student` WHERE `id` = '$sid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?>
<form method = "post" action = "updatedata.php" enctype="multipart/form-data">
<table border="1" align = "center" style = "width:70%; margin-top:40px;">

     <tr>
	 <th>Roll No.</th>
	 <td><input type= "number" name ="rollno" value="<?php echo $data['rollno'];?>" required=""></td>
	 </tr>
	 <tr>
	 <th>Full Name</th>
	 <td><input type= "text" name ="name" value="<?php echo $data['name'];?>" required=""></td>
	 </tr>
     <tr>
	 <th>City</th>
	 <td><input type= "text" name ="city" value="<?php echo $data['city'];?>" required=""></td>
	 </tr>
     <tr>
	 <th>Parents Contact no.</th>
	 <td><input type= "number" name ="pcon" value="<?php echo $data['pcont'];?>" required=""></td>
	 </tr>
     <tr>
	 <th>Stream</th>
	 <td><input type= "number" name="std" value="<?php echo $data['stream'];?>" required=""></td>
	 </tr>
	  <th>Semester</th>
	 <td><input type= "number" name="sem" value="<?php echo $data['sem'];?>" required=""></td>
	 </tr>
     <tr>
	 <th>Image</th>
	 <td><input type= "file" name ="simg" required=""></td>
	 </tr>
     <tr>
	 
	 
	 <td colspan = "2" ALIGN="CENTER">
	 <input type = "hidden" name="sid" value= "<?php echo $data['id'];?>">
	 <input type="submit" name="submit" value="Submit"></td>
	 </tr>


</table>
</form>
