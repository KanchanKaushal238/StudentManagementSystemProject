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
?>
<form method = "post" action = "addstudent.php" enctype="multipart/form-data">
<table border="1" align = "center" style = "width:70%; margin-top:40px;">

     <tr>
	 <th>Roll No.</th>
	 <td><input type= "text" name ="rollno" placeholder="Enter Rollno" required></td>
	 </tr>
	 <tr>
	 <th>Full Name</th>
	 <td><input type= "text" name ="name" placeholder="Enter Full Name" required></td>
	 </tr>
     <tr>
	 <th>City</th>
	 <td><input type= "text" name ="city" placeholder="Enter City" required></td>
	 </tr>
     <tr>
	 <th>Parents Contact nO.</th>
	 <td><input type= "text" name ="pcon" placeholder="Enter the Contact no of parents" required></td>
	 </tr>
     <tr>
	 <th>Stream</th>
	 <td><input type= "text" name="std" placeholder="Enter Stream" required></td>
	 </tr>
	   <tr>
	 <th>Semester</th>
	 <td><input type= "number" name="sem" placeholder="Enter Semester" required></td>
	 </tr>
     <tr>
	 <th>Image</th>
	 <td><input type= "file" name ="simg" required></td>
	 </tr>
     <tr>
	 <td colspan = "2" ALIGN="CENTER"><input type="submit" name="submit" value="Submit"></td>
	 </tr>


</table>
</form>
</BODY>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$rollno= $_POST['rollno'];
	$name= $_POST['name'];
	$city= $_POST['city'];
	$pcon= $_POST['pcon'];
	$std= $_POST['std'];
	$sem=$_POST['sem'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];
	$imgqy=move_uploaded_file($tempname,"../images/$imagename");
	if($imgqy==false)
	{
		?>
		<script>
		alert('IMAGE IS NOT Inserted IN DATABASE!!');
		</script>
		<?php
	}
	$qry="INSERT INTO `student`(`id`,`rollno`, `name`, `city`, `pcont`, `stream`, `sem`, `image`) 
	      VALUES (NULL,'$rollno','$name','$city','$pcon','$std','$sem','$imagename')";
		  if($qry==false)
		  {
			  ?>
			  <script>
		alert('Query is wrong');
		</script>
			  <?php
		  }
	$run=mysqli_query($con,$qry);
	if($run == true)
	{
		?>
		<script>
		alert('Data Inserted Successfully!!');
		</script>
		<?php
	}
	else{
		echo("error:".mysqli_error($con));
	    }
		
}
?>