<?php
include("dbcon.php");
include("header1.php");
$flag=0;
if(isset($_POST['submit']))
{
	
	foreach($_POST['attendance_status'] as $id=>$attendance_status)
	{
		$student_name=$_POST['student_name'][$id];
		$roll_number=$_POST['roll_number'][$id];
		$date=date('Y-m-d');
		
		$result=mysqli_query($con, "insert into attendance_records(student_name, roll_number,attendance_status, date)
		values('$student_name','$roll_number','$attendance_status','$date')");
		if($result)
		{
		$flag=1; 
		}
	}
}

?>
<div class="panel panel-default">

<div class="panel panel-heading">
<h2><a class="btn btn-success" href="attendance.php">Add Students</a>
<a class="btn btn-info pull-right" href="view_all.php">View All</a>
</h2>
<?php if($flag){ ?>

<div class="alert alert-success">
Attendance Data Insert Successfully;

</div>
<?php
} ?>


<h3><div class="well text-center">Date:<?php echo date("Y-m-d"); ?></div></h3>

<div class="panel panel-body">
<form action="add.php" method="Post">
<table class="table table-striped">
<tr>
<th>#serial number </th><th>Student Name </th><th>Roll Number </th><th>Attendance Status </th>
</tr>

<?php $result=mysqli_query($con, "select * from attendance");
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;

?>
<tr>
<td> <?php echo $serialnumber; ?></td>
<td> <?php echo $row['student_name']; ?>
<input type="hidden" value="<?php echo $row['student_name'];?>" name="student_name[]" >
</td>
<td> <?php echo $row['roll_number']; ?>
<input type="hidden" value="<?php echo $row['roll_number'];?>" name="roll_number[]" >
</td>
<td> <input type="radio" name="attendance_status[<?php echo $counter;?>]" value="Present">Present
<td> <input type="radio" name="attendance_status[<?php echo $counter;?>]" value="Absent">Absent
</td>
</tr>
<?php
$counter++;
}

?>

</table>
<input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>

</div>