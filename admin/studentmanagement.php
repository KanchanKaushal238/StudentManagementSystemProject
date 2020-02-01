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
?>
<div class = "admintitle" align = "center">

<h4><a href="admindash.php" style="float:left; margin-right:30px; color:#fff; font-size=20px;">back to dashboard>></a></h4>
<h1>Welcome to Student Management</h1>

</div>


<div class="dashboard">
<table  style="width:50%;" align="center">
<tr>
<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
</tr>
<tr>
<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
</tr>
<tr>
<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
</tr>

</table>
</div>
</body>
</html>
