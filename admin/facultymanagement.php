<?php

session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
			
		}
	else
	{
		header('location: ../login.php');
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
<td>1.</td><td><a href="insertteacher.php">Insert Teacher Details</a></td>
</tr>
<tr>
<td>2.</td><td><a href="updateteacher.php">Update Teacher Details</a></td>
</tr>
<tr>
<td>3.</td><td><a href="deleteteacher.php">Delete Teacher Details</a></td>
</tr>
<tr>
<td>4.</td><td><a href="attendance.php">Attendance Details</a></td>
</tr>
<tr>
<td>5.</td><td><a href="teacherreport.php">Teacher Report</a></td>
</tr>
</table>
</div>
</body>
</html>
