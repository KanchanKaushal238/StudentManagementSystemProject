<html>
<head>
</head>
<body style="background-color:mustard;">
<h1 style="background-color: green; height: 100px; margin-left:50px; margin-right:50px;">
<center><font size="30" color = "white">University Institute of Information Technology</font></center></h1>
<center><img src="C:\wamp64\www\smsp\images/logo.jpg"></center>
<h1 style="background-color:yellow; margin-left:250px; margin-right:250px; height:80px">
<center><font size="28">Student Management System</font></center>

<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>

     <h1 align = "center">
	 <font size="25">Admin Login</font></h1>
	 <form action ="index.php" method="post">
	     <table align = "center">
		 <tr>
		     <td>Username</td><td><input type ="text" name ="uname" required ></td>
		 </tr>	
		 <tr>
		    <td>Password</td><td><input type ="password" name ="pass" required ></td>
		 </tr>
		 <tr>
		     <td colspan="2" align = "center"><input type ="submit" name ="login" value = "Login"></td>
		 </tr>
		 </table>
	 </form>
	 <hr><a href="student.php"><font size="14">Get student report.....>></a><br>
	 <a href="addstudent.php"><font size="14">Add Student.....>> or  
	 <a href="updatestudent.php"><font size="14">Update Student Detail....>> </a>

</body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	
	$qry="SELECT * FROM admin WHERE username ='$username' AND password='$password'";
	$run=mysqli_query($con,$qry);
	$row= mysqli_num_rows($run);
	if($row <1)
	{
		?>
		<script>
		       alert('Username or Password not match !!');
			   window.open('index.php','_self');
	    </script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		
		$id=$data['id'];
		
		
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
		
	}
}

?>
</body>
</html>