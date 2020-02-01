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

<h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size=20px;">LOGOUT</a></h4>
<h1>Welcome to Admin Dashboard</h1>

</div>


<div class="dashboard">
<table  style="width:50%;" align="center">
<tr>
<td>1.</td><td><a href="studentmanagement.php">Student Management</a></td>
</tr>

<tr>
<td>2.</td><td><a href="add1.php">Attendance Management</a></td>
</tr>
</table>
</div>
</body>
</html>
