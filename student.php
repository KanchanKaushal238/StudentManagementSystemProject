<html>
<head>
</head>
<body style="background-color:mustard;">
<h1 style="background-color: green; height: 100px; margin-left:50px; margin-right:50px;">
<center><font size="30" color = "white">University Institute of Information Technology</font></center></h1>
<center><img src="C:\wamp64\www\smsp\images/logo.jpg"></center>
<h1 style="background-color:yellow; margin-left:250px; margin-right:250px; height:80px">
<center><font size="28">Student Management System</font></center>


<h3 align = "left" style ="margin-right:20px;"><a href="index.php">Go back>></a></h3>
<h1 align="center">Get student report by entering respective student details</h1>


<form method ="post" action = "student.php">
<table style= "width:30%;" align = "center" border="1">
      <tr>
	      <td colspan="2" align = "center">Student Information</td>
	  </tr>
	  <tr>
	      <td align = "left">Choose Semester</td>
		  <td>
		      <select name ="std" required>
			  <option value ="1">1</option>
			  <option value ="2">2</option>
			  <option value ="3">3</option>
			  <option value ="4">4</option>
			  <option value ="5">5</option>
			  <option value ="6">6</option>
			  <option value ="7">7</option>
			  <option value ="8">8</option>

		  </td>
	  </tr>
	  	  <tr>
	      <td align = "left">Choose Stream</td>
		  <td>
		      <select name ="std" required>
			  <option value ="1">IT</option>
			  <option value ="2">CSE</option>


		  </td>
	  </tr>
	 <tr>
	     <td align="left">Enter Rollno</td>
		 <td>
		 
             <input type="text" name = "rollno" required>
		 
		 </td>
	 </tr>
	 <tr>
	     <td colspan="2" align="center"><input type = "submit" name = "submit" value = "Show Info"</td>
	 </tr>
	 <hr><a href="view_all.php">Get Attendance Detail</a>
</table>
</form>
</body>
</html>	
<?php
if (isset($_POST['submit']))
{
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];
	$semester=$_POST['semester'];
	
	include('dbcon.php');
	include('function.php');
	
	showdetails($standard,$rollno);
	
}
?>